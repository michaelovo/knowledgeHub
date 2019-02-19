<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    //
    public function posts(){
      return $this->belongsToMany('App\Model\user\post','post_tags')->orderBy('created_at','DESC')->paginate(4);// "post_tag" the table model name
    }
    // get tags by slug
    public function getRouteKeyName(){
      return 'slug';
    }
}
