<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Intervention\Image\Facades\Image as Image;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $action = URL::route('admin.categories.store');
        $categories = Category::all();
        return view('admin.categories.index',[
            'categories' => $categories,
            'action' => $action
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:20|min:3|unique:categories',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $category_name = $validatedData['name'];
        $category = new Category();

        if ($request->file('image')) {
            $filenameWthExt =  $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWthExt,PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('image')->storeAs('public/category_photos/',$filenameToStore);

            $category->image = $filenameToStore;
        }

        $category->name = strtolower($category_name);
        $category->save();

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $action = URL::route('admin.categories.update',$category->id);

        $categories = Category::all();

        return view('admin.categories.index',[
            'edit_category' => $category,
            'categories' => $categories,
            'action' => $action
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
        ]);

        //Handle file Upload
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/category_photos', $fileNameToStore);

            $category->image = $fileNameToStore;
        }

        $category->name = $validatedData['name'];
        $category->save();

        toastr()->success('Data has been updated successfully!');

        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if (Storage::delete('public/category_photos/'.$category->image)){
            $category->delete();
        }
        toastr()->error('Data has been deleted successfully!');

        return redirect()->route('admin.categories.index');
    }

    public function categoryAd($id){
        $category = Category::findOrFail($id);
        $category_ads = $category->addposts()->paginate(10);

        return view('admin.categories.category_ads',[
            'category_ads' => $category_ads,
            'category' => $category
        ]);
    }
}
