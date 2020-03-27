<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleValidatorRequest;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;

class AdminRoleController extends Controller
{

    public function __construct(){
        $this->middleware(['auth','admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index',[
            'roles' => $roles
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
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleValidatorRequest $request)
    {
        if (Gate::denies('admin-permission')) {
            toastr()->warning("You don't have permission");
            return redirect()->route('admin.roles.index');
        }

        $validated = $request->validated();
        $role_name = $validated['name'];

        $role = new Role();

        $role->name = strtolower($role_name);
        $role->save();
        toastr()->success('Data has been saved successfully!');

        return redirect()->route('admin.roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        if (Gate::denies('admin-permission')) {
            toastr()->warning("You don't have permission");
            return redirect()->route('admin.roles.index');
        }

        return view('admin.roles.edit',[
            'role' => $role
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        if (Gate::denies('admin-permission')) {
            toastr()->warning("You don't have permission");
            return redirect()->route('admin.roles.index');
        }

        $validatedData = $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id,
        ]);

       $role->name = $validatedData['name'];
       $role->save();

       toastr()->success('Data has been updated successfully!');

        return redirect()->route('admin.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        if (Gate::denies('admin-permission')) {
            toastr()->warning("You don't have permission");
            return redirect()->route('admin.roles.index');
        }

        $role->delete();
        $role->users()->wherePivot('role_id','=',$role->id)->detach();
        toastr()->info('Data has been deleted successfully!');

        return redirect()->route('admin.roles.index');
    }
}
