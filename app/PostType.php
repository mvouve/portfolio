<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    //
    public $timestamps = false;

    public function posts() {
        return $this->hasMany('App\Post', 'post_type', 'id');
    }

    public function categories() {
        return $this->hasManyThrough('App\User', 'App\Category');
    }
}
