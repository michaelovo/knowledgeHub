<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function permissions()
  {
    //Relationship between role and permission
    return $this->belongsToMany('App\Model\admin\Permission');
  }
    public function admins()
    {
      //Relationship between permission and role
      return $this->belongsToMany('App\Model\admin\admin');
    }
}
