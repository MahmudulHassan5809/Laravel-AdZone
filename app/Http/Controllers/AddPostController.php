<?php

namespace App\Http\Controllers;

use App\AddPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AddPostController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.addpost.add_post');
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
            'category' => 'required',
            'division' => 'required',
            'area' => 'required',
            'type' => 'required',
            'title' => 'required|string|max:50|min:3',
            "images"    => "required|array|min:3|max:4",
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'condition' => 'required',
            'price' => 'required',
            'brand_name' => 'required',
            'tags' => 'required|string',
            'description' => 'required|string',
        ]);

        $tag_array = explode(",",$validatedData['tags']);



        $newPost = new AddPost();

        $newPost->category_id = $validatedData['category'];
        $newPost->user_id = Auth::user()->id;
        $newPost->division = $validatedData['division'];
        $newPost->area = $validatedData['area'];
        $newPost->type = $validatedData['type'];
        $newPost->title = $validatedData['title'];
        $newPost->condition = $validatedData['condition'];
        $newPost->price = $validatedData['price'];
        $newPost->brand_name = $validatedData['brand_name'];
        $newPost->description = $validatedData['description'];
        $newPost->tags = $tag_array;

        if($request->hasFile('images')){
            $image_names = [];
            foreach($request->file('images') as $image)
            {

                $filenameWthExt =  $image->getClientOriginalName();
                $filename = pathinfo($filenameWthExt,PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $filenameToStore = $filename.'_'.time().'.'.$extension;

                $path = $image->storeAs('public/post_photos/',$filenameToStore);

                array_push($image_names, $filenameToStore);

            }
            $newPost->images = json_encode($image_names);
        }

        $newPost->save();

        toastr()->success('Post has been Added successfully!');
        return redirect()->route('user.userdetails.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AddPost $addpost)
    {
        //$addpost = $addpost::with(['user','category'])->get();


        $recommended_posts = $addpost->where('category_id',$addpost->category_id)->inRandomOrder()->limit(5)->get();;



        return view('front.addpost.show_post',[
            'addpost' => $addpost,
            'recommended_posts' => $recommended_posts
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AddPost $addpost)
    {

        $this->authorize('update', $addpost);
        return view('front.addpost.edit_post',[
            'addpost' => $addpost,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddPost $addpost)
    {
        $this->authorize('update', $addpost);

        $validatedData = $request->validate([
            'category' => 'required',
            'division' => 'required',
            'area' => 'required',
            'title' => 'required|string|max:50|min:3',
            'price' => 'required',
            'brand_name' => 'required',
            'description' => 'required|string',
        ]);

        $addpost->category_id = $validatedData['category'];
        $addpost->division = $validatedData['division'];
        $addpost->area = $validatedData['area'];
        $addpost->price = $validatedData['price'];
        $addpost->brand_name = $validatedData['brand_name'];
        $addpost->description = $validatedData['description'];

        $addpost->save();

        toastr()->success('Post has been Updated successfully!');

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddPost $addpost)
    {
        $this->authorize('delete', $addpost);

        foreach (json_decode($addpost->images) as $image) {
            Storage::delete('public/post_photos/'.$image);
        }
        $addpost->delete();
        toastr()->error('Data has been deleted successfully!');

        return redirect()->back();
    }

    public function adSold($id){



        $ad = AddPost::findOrFail($id);

        $this->authorize('update', $ad);

        $ad->sold = 1;
        $ad->save();
        toastr()->success('Add has been Sold!');

        return redirect()->back();
    }
}
