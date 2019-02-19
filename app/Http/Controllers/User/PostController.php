<?php

namespace App\Http\Controllers\User;
use App\Model\user\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    // To get posts from db via the slug
    public function posts(post $post){
      /*'post' is the model name. '$post' can be any name bt must be dsame as in compact method below,
      and in posts.blade file.{PostController, posts.blade, post.php, web.php}
      */
    //  return $slug;
      return view('layouts/user/posts',compact('post'));
    }
}
