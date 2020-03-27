<?php

namespace App\Http\Controllers\Admin;

use App\AddPost;
use App\Category;
use App\Http\Controllers\Controller;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware(['admin','auth']);
    }

    public function index(){
        $category_ids = Category::pluck('id')->toArray();

        $user_count = User::all()->count();
        $ad_count = AddPost::all()->count();

        $category_ads_count_array = array();

        foreach ($category_ids as $id) {
            $category_name =  Category::where('id',$id)->pluck('name')->first();
            $category_ads_count = AddPost::where('category_id',$id)->count();
            $category_ads_count_array[$category_name] = $category_ads_count;
        }



        return view('admin.dashboard',[
            'category_count' => count($category_ids),
            'user_count' => $user_count,
            'ad_count' => $ad_count,
            'category_ads_count_array' => $category_ads_count_array
        ]);
    }

    public function statusToggle($id){
        if (Gate::denies('can-edit')) {
            toastr()->warning("You don't have permission");
            return redirect()->route('admin.admin.dashboard');
        }

        $addPost = AddPost::findOrFail($id);
        $addPost->active = !$addPost->active;
        $addPost->save();

        toastr()->warning("Successfully Changed The Status");
        return redirect()->back();
    }

    public function allAds(){
        $all_ads = AddPost::with('user','category')->paginate(10);

        return view('admin.ads.all_ads',[
            'all_ads' => $all_ads
        ]);
    }

    public function adminProfile(){
        $user = Auth::user();
        return view('admin.profile',[
            'user' => $user
        ]);
    }


    public function adminUpdateProfile(Request $request){
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users,name,' . $user->id,
            'phone_number' => 'required|string|max:12|unique:users,phone_number,' . $user->id,
        ]);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->phone_number = $validatedData['phone_number'];

        $user->save();

        toastr()->success('Profile has been updated successfully!');

        return redirect()->back();
    }

    public function adminChangePassword(Request $request){
        $user = Auth::user();

        $validatedData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed'
        ]);

        if(!(Hash::check($validatedData['old_password'],$user->password))) {
            toastr()->error('Your current password does not matches with the password you provided. Please try again.');
            return redirect()->back();
        }

        if(strcmp($validatedData['old_password'], $validatedData['new_password']) == 0){
            toastr()->error('New Password cannot be same as your current password. Please choose a different password.');
            return redirect()->back();
        }

        $user->password = bcrypt($request->get('new_password'));
        $user->save();

        toastr()->success('Password changed successfully !');
        return redirect()->back();
    }
}
