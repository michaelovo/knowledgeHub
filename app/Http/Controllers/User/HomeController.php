<?php

namespace App\Http\Controllers\User;
use App\Model\user\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){

      // '$slug' must be the same in the 'post' model function 'getRouteKeyName'
      $slug=post::where('status',1)->get();
        return view('layouts/user/blogs',compact('slug'));
    }
}
