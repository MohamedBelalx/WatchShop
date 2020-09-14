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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
