<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Home;

Auth::routes();

Route::get('/news', 'BlogController@index');
/*Route::get('/isi_post', function(){
	return view('blog.isi_post');
});*/
Route::get('/',function (){
    $data = Home::all();

    return view('index', compact('data'));});
Route::get('/isi-post/{slug}', 'BlogController@isi_blog')->name('blog.isi');

Route::get('/list-post','BlogController@list_blog')->name('blog.list');
Route::get('/list-category/{category}','BlogController@list_category')->name('blog.category');
Route::get('/cari','BlogController@cari')->name('blog.cari');

//Route::get('/news',function (){
//    return view('layoutNews');
//});


Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/category', 'CategoryController');
    Route::resource('/tag', 'TagController');

    Route::get('/post/tampil_hapus', 'PostController@tampil_hapus')->name('post.tampil_hapus');
    Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
    Route::delete('/post/kill/{id}', 'PostController@kill')->name('post.kill');
    Route::resource('/post', 'PostController');
    Route::resource('/user', 'UserController');
    Route::resource('/setting', 'LandingController');
});









