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

Route::get('/', function () {
    return view('index');
});
Route::get('/cart',function()
{
    return view('cart');
});

Route::get('/shop',function()
{
    return view('shop');
});

Route::get('/blog',function()
{
    return view('blog');
});

Route::get('/blogdetails',function()
{
    return view('blogdetails');
});
Route::get('/productdetails',function()
{
    return view('prddetails');
});

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
