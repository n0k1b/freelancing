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

Route::prefix('user')->group(function(){
    Route::view('dashboard','dashboard');
    // Route::get('get_category',"GigController@get_category");
    Route::post('create-blog-post','UserController@createBlogPost')->name('createBlogPost');
    Route::get('read-blog-post/{skip}/{take}','UserController@readBlogPost')->name('readBlogPost');
    Route::post('create-blog-comment','UserController@createBlogComment')->name('createBlogComment');
    Route::get('read-blog-comment/{id}','UserController@readBlogComment')->name('readBlogComment');
    Route::get('delete-blog-post/{id}','UserController@deleteBlogPost')->name('deleteBlogPost');

});

Route::view('login', 'login')->name('login');
Route::view('registration', 'register');

Route::view('otp/{id}','otp')->name('otp');
Route::post('sending-otp','AuthController@sendingOtp')->name('sending-otp');
Route::get('resend_otp/{id}','AuthController@process_otp')->name('resendOtp');

Route::post('registration', 'AuthController@registration')->name('registration');
Route::post('login', 'AuthController@process_login')->name('process_login');

Route::post("submit_gig","GigController@gig_post");
Route::get('get_category',"GigController@get_category");

Route::view('blog', 'blog');
Route::post('create-blog-post','blogController@createBlogPost')->name('createBlogPost');
Route::get('read-blog-post/{skip}/{take}','blogController@readBlogPost')->name('readBlogPost');
Route::post('create-blog-comment','blogController@createBlogComment')->name('createBlogComment');
Route::get('read-blog-comment/{id}','blogController@readBlogComment')->name('readBlogComment');
