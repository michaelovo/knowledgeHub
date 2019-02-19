<?php

/*
Route::get('/', function () {
    return view('layouts/user/blogs');
})->name('blogs');

Route::get('/posts', function () {
    return view('layouts/user/posts');
})->name('posts');
*/

// USER ENDS
Route::group(['namespace' => 'User'],function(){
  Route::get('/','HomeController@index')->name('blogs');
  Route::get('posts/{post}','PostController@posts')->name('posts');
  Route::get('posts/tags/{tags}','HomeController@tag')->name('tags');
  Route::get('posts/category/{category}','HomeController@category')->name('category');

});




//ADMIN ENDS
Route::group(['namespace' => 'Admin'],function(){
      Route::get('admin/home','HomeController@index')->name('home');
      Route::resource('admin/post','PostController');
      Route::resource('admin/tags','TagController');
      Route::resource('admin/category','CategoryController');
      Route::resource('admin/user','UserController');
});


//  admin routes
/*
Route::get('/admin/home', function () {
    return view('layouts.admin.home');
})->name('home');
Route::get('/admin/post', function () {
    return view('layouts.admin.postslayout.post');
})->name('post');

Route::get('/admin/table', function () {
    return view('layouts.admin.table');
})->name('table');

Route::get('/admin/tags', function () {
    return view('layouts.admin.tag.tags');
})->name('tags');

Route::get('/admin/category', function () {
    return view('layouts.admin.category.category');
})->name('category');
*/
Route::get('/admin/table', function () {
    return view('layouts.admin.table');
})->name('table');
