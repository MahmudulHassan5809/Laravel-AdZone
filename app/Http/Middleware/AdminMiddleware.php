<?php

namespace App\Http\Middleware;

use App\Role;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $roles_array = array();
        $roles = Role::where('name', '!=' , 'user')->get();

        foreach ($roles as $role) {
            array_push($roles_array, $role->name);
        }


        if(Auth::user()->hasAnyRoles($roles_array)){
            return $next($request);
        }


        return redirect('/login');
    }
}
