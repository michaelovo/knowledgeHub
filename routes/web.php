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
  //Post Routes
  Route::get('posts/{post}','PostController@posts')->name('posts');
  //Tag Routes
  Route::get('posts/tags/{tags}','HomeController@tag')->name('tags');
  //Category Routes
  Route::get('posts/category/{category}','HomeController@category')->name('category');

// vue Routes
  Route::post('getpost','PostController@getAllpost');
});




//ADMIN ENDS
Route::group(['namespace' => 'Admin'],function(){
      Route::get('admin/home','HomeController@index')->name('admin.home');
      //Posts Routes
      Route::resource('admin/post','PostController');
      //Tag Routes
      Route::resource('admin/tags','TagController');
      //RolesRoutes
      Route::resource('admin/role','RoleController');
      //Permission Routes
      Route::resource('admin/permission','PermissionController');
      //Category Routes
      Route::resource('admin/category','CategoryController');
      //User Routes
      Route::resource('admin/user','UserController');
      //Admin Auth Route
      Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
      Route::post('admin-login', 'Auth\LoginController@login');
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
Route::get('/admin/login', function () {
    return view('layouts.admin.login');
})->name('table');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
