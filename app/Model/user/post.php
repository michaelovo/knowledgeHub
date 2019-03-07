<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;
use\Carbon\Carbon;
class post extends Model
{
    // Relationship btw post and tag .
    // A single post can have many tags, and one tag can be included in many posts 'many->many'
    public function tags(){
      return $this->belongsToMany('App\Model\user\tag','post_tags')->withTimestamps();// "post_tag" the table model name
    }
    // '->withTimestamps()' allows "created_at" and "updated_at" time to be submitted to database
    public function category(){
      return $this->belongsToMany('App\Model\user\category','category_posts')->withTimestamps();// "post_tag" the table model name
    }

    // To display post content body to user frontend via slug. 'slug' must be dsame as in db
    public function getRouteKeyName(){
      return 'slug';
    }
      // to get 'created_at' date in human form. take note of the Carbon header
    public function getCreatedAtAttribute($value){
      return Carbon::parse($value)->diffForHumans();
    }
}
