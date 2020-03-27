<?php

namespace App;

use App\AddPost;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = ['name','image'];

    public function addposts(){
        return $this->hasMany(AddPost::class);
    }

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->slug = Str::slug($model->name, '-');
        });
    }
}
