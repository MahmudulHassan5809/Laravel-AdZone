<?php

namespace App\Policies;

use App\AddPost;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AddPostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any add posts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the add post.
     *
     * @param  \App\User  $user
     * @param  \App\AddPost  $addPost
     * @return mixed
     */
    public function view(User $user, AddPost $addPost)
    {

    }

    /**
     * Determine whether the user can create add posts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the add post.
     *
     * @param  \App\User  $user
     * @param  \App\AddPost  $addPost
     * @return mixed
     */
    public function update(User $user, AddPost $addPost)
    {
        return $user->id === $addPost->user_id;
    }

    /**
     * Determine whether the user can delete the add post.
     *
     * @param  \App\User  $user
     * @param  \App\AddPost  $addPost
     * @return mixed
     */
    public function delete(User $user, AddPost $addPost)
    {
        return $user->id === $addPost->user_id;
    }

    /**
     * Determine whether the user can restore the add post.
     *
     * @param  \App\User  $user
     * @param  \App\AddPost  $addPost
     * @return mixed
     */
    public function restore(User $user, AddPost $addPost)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the add post.
     *
     * @param  \App\User  $user
     * @param  \App\AddPost  $addPost
     * @return mixed
     */
    public function forceDelete(User $user, AddPost $addPost)
    {
        //
    }
}
