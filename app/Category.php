<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function posts() {
        return $this->belongsToMany('App\Post');
    }

    public function postTypes() {
        return $this->hasManyThrough('App\Post', 'App\PostType', 'post_type');
    }
}
