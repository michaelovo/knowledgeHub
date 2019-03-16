<?php

namespace App\Http\Controllers\User;
use App\Model\user\post;
use App\Model\user\category;
use App\Model\user\tag;
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
      $slug=post::where('status',1)->orderBy('created_at','DESC')->paginate(4);
        return view('layouts/user/blogs',compact('slug'));
      //  return view('layouts/user/blogs');
    }

      /* (category $category)'category' is the model name. '$category' can be any name bt must be dsame as in compact method below,*/
    public function category(category $category){
        $slug = $category->posts();
    //  $slug = category
      return view('layouts/user/blogs',compact('slug'));
    }

    public function tag(tag $tags){
        $slug = $tags->posts();
        return view('layouts/user/blogs',compact('slug'));
    }
    public function contact()
    {
      return view('layouts/user/contact');
    }
    public function about()
    {
      return view('layouts/user/about');
    }

}
