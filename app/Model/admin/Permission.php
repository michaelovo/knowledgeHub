<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
  public function roles()
{
  //Relationship between permission and role
  return $this->belongsToMany('App\Model\admin\role');
}
}
