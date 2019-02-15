<?php

namespace App\Http\Controllers\Admin;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
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
        $tag = tag::all();
        $category = category::all();
        return view('layouts.admin.postslayout.post',compact('tag','category'));
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
      //  'image'=>'required',
        //'status'=>'required',
        'body'=>'required'


      ]);
        //

        $post = new Post;
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
        $posts=post::where('id',$id)->first();
        $tag = tag::all();
        $category = category::all();
        return view('layouts.admin.postslayout.edit',compact('tag','category','posts'));
          //return view('layouts.admin.postslayout.edit',compact('posts'));
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
        'body'=>'required'


      ]);

        $post = Post::find($id);
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
