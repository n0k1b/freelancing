<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('create_gig');
// });

Route::get('/','GigController@view_all_gig');

Route::view('login', 'login');
Route::view('registration', 'register');

Route::post("submit_gig","GigController@gig_post");
Route::view('blog', 'blog');
Route::get('get_category',"GigController@get_category");
Route::post('create-blog-post','blogController@createBlogPost')->name('createBlogPost');
Route::get('read-blog-post/{skip}/{take}','blogController@readBlogPost')->name('readBlogPost');
Route::post('create-blog-comment','blogController@createBlogComment')->name('createBlogComment');
Route::get('read-blog-comment/{id}','blogController@readBlogComment')->name('readBlogComment');
