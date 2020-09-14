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

Route::get('/',"IndexController@index");

Route::get('/cart',function()
{
    return view('cart');
});

Route::get('/shop',function()
{
    return view('shop');
});

Route::get('/blog',"PostsController@index")->name('blog');

Route::get('/blog/details/{id}',"PostsController@single")->name('blogdetails');
Route::post('/blog/details/comment/{id}',"CommentsController@insert")->name('comment');

Route::get('/product/details/{id}',"ProductController@details")->name('details');

Route::get('/contact',function()
{
    return view('contact');
});
Route::get('/ulogin',function()
{
    return view('ulogin');
});

/* Start Admin Routes */ 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/manage/posts','PostsController@manage')->name('manage');
Route::get('/home/posts/delete/{id}','PostsController@delete')->name('deletepost');
Route::get('home/posts','PostsController@create')->name('createpost');
Route::get('home/posts/edit/{id}','PostsController@edit')->name('editpost');
Route::post('home/posts/update/{id}','PostsController@update')->name('updatepost');
Route::post('home/posts/insert','PostsController@insert')->name('insertpost');