<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserDetailsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('front.userdetails.profile',[
            'user' => $user
        ]);
    }


    public function userAdd(){
        $user = Auth::user();
        $userAdds = $user->adds()->get();

        return view('front.userdetails.user_adds',[
            'user' => $user,
            'userAdds' => $userAdds
        ]);

    }


    public function saveAsFavorite($postid){
        $user = Auth::user();

        $user->favorites()->attach($postid);

        return redirect()->route('user.userdetails.favoriteadd');
    }

    public function userFavorite(){
        $user = Auth::user();
        $userAdds = $user->favorites()->get();

        return view('front.userdetails.favorite_adds',[
            'user' => $user,
            'userAdds' => $userAdds
        ]);
    }

    public function removeFavorite($postid){
        $user = Auth::user();
        $user->favorites()->detach($postid);

        return redirect()->route('user.userdetails.favoriteadd');
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
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

        return redirect()->route('user.userdetails.index');
    }

    public function changePassword(Request $request){
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
