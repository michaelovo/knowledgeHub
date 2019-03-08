<?php

namespace App\Http\Controllers\User;
use App\Model\user\post;
use App\Model\user\like;
use Illuminate\Support\Facades\Auth;
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

      // to retrive data for vue. Note: its dsame as in the index of the user HomeController
    public function getAllpost(){
      return $slug=post::with('likes')->where('status',1)->orderBy('created_at','DESC')->paginate(4);

    }
    // the Like system saveLike
    public function saveLike(request $request)
    {
        // checks if a user has any 'like' on a post then value =1
      $likecheck = like::where(['user_id'=>Auth::id(),'post_id'=>$request->id])->first();

      if($likecheck){
          // this delete if the like value is true
          like::where(['user_id'=>Auth::id(),'post_id'=>$request->id])->delete();
          return 'deleted';
      }
      else{
      $like = new like;
      $like->user_id = Auth::id();
      $like->post_id = $request->id;
      $like->save();
      }
    }
}
