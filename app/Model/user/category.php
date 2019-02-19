<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    public function posts(){
      return $this->belongsToMany('App\Model\user\post','category_posts')->orderBy('created_at','DESC')->paginate(4);// "post_tag" the table model name
    }
    // get category by slug
    public function getRouteKeyName(){
      return 'slug';
    }
}
