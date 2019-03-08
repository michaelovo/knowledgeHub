<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
  // post/like Relationship
  public function post(){
    //'likes' is the table name
    return $this->belongsTo('App\Model\user\post','likes');
  }
}
