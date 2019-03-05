<?php

namespace App\Http\Controllers\Admin;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class PostController extends Controller
{



  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {

      $this->middleware('auth:admin');
  }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = post::all();

      //  return view('layouts.admin.tag.show',compact('posts'));
        return view('layouts.admin.postslayout.show',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Auth::user()->can('posts.create'))
      {


        $tag = tag::all();
        $category = category::all();
        return view('layouts.admin.postslayout.post',compact('tag','category'));
      }
      
        return redirect(route('admin.home'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request,[
        'title'=>'required',
        'subtitle'=>'required',
        'slug'=>'required',
        'image'=>'required',
        //'status'=>'required',
        'body'=>'required'
      ]);

      // To test for image/file availability before upload
        if($request->hasFile('image')){
          //To store uploaded file. directory'storage/app/public/images
        $imageName = $request->image->store('public/images');//'public' is default, bt '/images' is user defined
        }

        $post = new Post;
        $post->image = $imageName;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save(); //Note: this line must come before the next two else error when submitting to db
        //$post->tags()->sync($request->tags);// 'tags' is the relationship name defined in the model
        $post->tags()->sync($request->tags);// 'tags' is the relationship name defined in the 'user' model
        $post->category()->sync($request->category);// 'category' is the relationship name defined in the 'user' model

        return redirect(route('post.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      if (Auth::user()->can('posts.update'))
      {
        $posts=post::with('tags','category')->where('id',$id)->first(); //'tags n category' model relationship name defined
        $tag = tag::all();//allows editing of tags on post 'edit' file
        $category = category::all();//allows editing of category on post 'edit' file
        return view('layouts.admin.postslayout.edit',compact('tag','category','posts'));
          //return view('layouts.admin.postslayout.edit',compact('posts'));
        }
          return redirect(route('admin.home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //return $request->all();
        //To validate before updating
        $this->validate($request,[
        'title'=>'required',
        'subtitle'=>'required',
        'slug'=>'required',
        'image'=>'required',
        'body'=>'required'
      ]);
      // To test for image/file availability before upload
        if($request->hasFile('image')){
        //  return $request->image->getClientOriginalName(); // to get original image/file name
          //To store uploaded file. directory'storage/app/public/images
        $imageName = $request->image->store('public/images');//'public' is default, bt '/images' is user defined
        }

        $post = Post::find($id);
        $post->image = $imageName;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->update();// 'save()' will also work
        $post->tags()->sync($request->tags);// 'tags' is the relationship name defined in the 'user' model
        $post->category()->sync($request->category);// 'category' is the relationship name defined in the 'user' model

        return redirect(route('post.index'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id',$id)->delete();
        return redirect()->back();
    }
}
