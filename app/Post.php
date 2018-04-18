<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author() {
        return $this->belongsTo('App\User', 'user_id')->withDefault(function($user) {
            $user->name = 'Guest';
            $user->display_name = 'Guest';
        });
    }

    public function categories() {
        return $this->belongsToMany('App\Category');
    }

    public function postType() {
        return $this->hasOne('App\PostType', 'id', 'post_type');
    }
}
