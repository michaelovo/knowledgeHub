<?php

namespace App\Http\Controllers\User;
use App\Model\user\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    // To get posts from db via the slug
    public function posts(post $slug){
      /*'post' is the model name. '$slug' can be any name bt must be dsame as in compact method below,
      and in "  return 'slug';" in user PostController and in posts.blade file
      */
    //  return $slug;
      return view('layouts/user/posts',compact('slug'));
    }
}
