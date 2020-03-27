<?php

namespace App;

use App\AddPostLike;
use App\Category;
use App\User;
use Illuminate\Database\Eloquent\Model;
use \Spatie\Tags\HasTags;


class AddPost extends Model
{
    use HasTags;

    protected $fillable = [
        'category_id', 'user_id', 'title','type', 'images','condition','division','area','price', 'brad_name','description','tags',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function favorites(){
        return $this->belongsToMany('App\User', 'add_post_likes');
    }
}
