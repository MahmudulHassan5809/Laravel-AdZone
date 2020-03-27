<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',[
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('admin-permission')) {
            toastr()->warning("You don't have permission");
            return redirect()->route('admin.roles.index');
        }

        $roles = Role::all();

        return view('admin.users.create',[
            'roles' => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Gate::denies('admin-permission')) {
            toastr()->warning("You don't have permission");
            return redirect()->route('admin.roles.index');
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'roles' => 'required|array|min:1',

        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        $user->roles()->sync($request->roles);

        toastr()->success('Data has been added successfully!');

        return redirect()->route('admin.users.index');

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
        if (Gate::denies('admin-permission')) {
            toastr()->warning("You don't have permission");
            return redirect()->route('admin.roles.index');
        }

        $roles = Role::all();

        return view('admin.users.edit',[
            'user' => $user,
            'roles' => $roles
        ]);
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
        if (Gate::denies('admin-permission')) {
            toastr()->warning("You don't have permission");
            return redirect()->route('admin.roles.index');
        }
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        $user->roles()->sync($request->roles);

        toastr()->success('Data has been updated successfully!');

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Gate::denies('admin-permission')) {
            toastr()->warning("You don't have permission");
            return redirect()->route('admin.roles.index');
        }
        $user->roles()->detach();
        $user->delete();
        toastr()->error('Data has been deleted successfully!');
        return redirect()->route('admin.users.index');
    }
}
