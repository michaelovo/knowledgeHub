<?php



// USER ENDS
Route::group(['namespace' => 'User'],function(){
  Route::get('/','HomeController@index')->name('blogs');
  Route::get('/about','HomeController@about')->name('about');
  Route::get('/contact','HomeController@contact')->name('contact');
  //Post Routes
  Route::get('posts/{post}','PostController@posts')->name('posts');
  //Tag Routes
  Route::get('posts/tags/{tags}','HomeController@tag')->name('tags');
  //Category Routes
  Route::get('posts/category/{category}','HomeController@category')->name('category');

// vue Routes
  Route::post('getpost','PostController@getAllpost');
  // Like system saveLike
  Route::post('saveLike','PostController@saveLike');
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



Route::get('/admin/login', function () {
    return view('layouts.admin.login');
})->name('table');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
