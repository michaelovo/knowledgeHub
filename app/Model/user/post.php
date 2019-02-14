<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    // Relationship btw post and tag .
    // A single post can have many tags, and one tag can be included in many posts 'many->many'
    public function tags(){
      return $this->belongsToMany('App\Model\user\tag','post_tags');// "post_tag" the table model name
    }

    public function category(){
      return $this->belongsToMany('App\Model\user\category','category_posts');// "post_tag" the table model name
    }
}
