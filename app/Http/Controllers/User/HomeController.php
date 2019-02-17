<?php

namespace App\Http\Controllers\User;
use App\Model\user\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){

      /*this controls the retrieval of all post from the db
       '$slug' must be the same in the 'post' model function 'getRouteKeyName'
       only display posts whose publish status is="1"
     $slug=post::where('status',1)->get();
     */
      $slug=post::where('status',1)->paginate(4);
        return view('layouts/user/blogs',compact('slug'));
    }
}
