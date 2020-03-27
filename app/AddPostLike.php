<?php

namespace App;

use App\AddPost;
use App\User;
use Illuminate\Database\Eloquent\Model;

class AddPostLike extends Model
{

    protected $table = 'add_post_likes';

    protected $fillable = [
        'post_id', 'user_id'
    ];
}
