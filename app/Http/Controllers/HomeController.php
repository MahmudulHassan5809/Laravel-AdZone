<?php

namespace App\Http\Controllers;

use App\AddPost;
use App\Category;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_posts = AddPost::with('user','category')->where('active',1)->where('sold',0)->orderBy('id', 'DESC')->paginate(10);



        return view('welcome',[
            'all_posts' => $all_posts,
            'title' => 'All Adds'
        ]);
    }

    public function categoryAdds($slug){
        $category = Category::where('slug',$slug)->first();
        $all_categories_products = $category->addposts()->where('active',1)->where('sold',0)->orderBy('id', 'DESC')->paginate(10);

        return view('welcome',[
            'all_posts' => $all_categories_products,
            'title' => $category->name
        ]);
    }

    public function tagAdds($name){
        $all_tags_products = AddPost::withAllTags([$name])->where('active',1)->where('sold',0)->orderBy('id', 'DESC')->paginate(10);
        return view('welcome',[
            'all_posts' => $all_tags_products,
            'title' => $name
        ]);
    }

    public function userAdds($id){
        $user = User::findOrFail($id);
        $users_products = $user->adds()->where('active',1)->where('sold',0)->orderBy('id', 'DESC')->paginate(10);
        return view('welcome',[
            'all_posts' => $users_products,
            'title' => $user->name.' '.'Adds'
        ]);
    }

    public function conditionAdds(Request $request){
        $condition = $request->condition;

        $all_posts = AddPost::with('user','category')
                ->where('condition', $condition)
                ->orWhere('condition', 'like', '%' . $condition . '%')
                ->where('active',1)->where('sold',0)->orderBy('id', 'DESC')->paginate(10);

        return view('welcome',[
            'all_posts' => $all_posts,
            'title' => $condition
        ]);
    }

    public function priceRangeAdds(Request $request){
        $price_range = $request->price_range;
        $all_posts = AddPost::with('user','category')->where('price','>=',$price_range)->where('active',1)->where('sold',0)->orderBy('id', 'DESC')->paginate(10);


       return view('welcome',[
            'all_posts' => $all_posts,
            'title' => 'All Adds'
        ]);
    }


    public function searchAdds(Request $request){
        $category_id = $request->category;
        $division = $request->division;
        $serach = $request->search;

        // if (empty($category_id) || empty($division) || empty($serach)) {
        //     toastr()->error('Please Input All The Search Field');
        //     return redirect()->back();
        // }

        $all_posts = AddPost::with('user','category')
        ->where('category_id',$category_id)
        ->where('division','=',$division)
        ->where('title', 'like', '%' . $serach . '%')
        ->where('active',1)->where('sold',0)->orderBy('id', 'DESC')->paginate(10);

        return view('welcome',[
            'all_posts' => $all_posts,
            'title' => $serach
        ]);
    }


    public function Support(){
         return view('front.pages.help_support',[
            'title' => 'Help & Support'
         ]);
    }

    public function About(){
         return view('front.pages.about',[
            'title' => 'About Us'
         ]);
    }
}
