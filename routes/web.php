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
Route::view('create_gig','create_gig');
Route::view('/','index');
Route::get('view_all_gig','GigController@view_all_gig');
Route::post('search_gig','GigController@view_gig');
Route::get('get_gig_details/{gig_id}','GigController@get_gig_details')->name('gig_details');
Route::view('login', 'login');
Route::view('dashboard', 'dashboard2');
//Route::view('see_notification', 'notification');
Route::get('see_notification_entrepreneur',"GigController@see_notification_entrepreneur");
Route::get('manage_hire','GigController@manage_hire');
Route::post('submit_review','GigController@submit_review');
Route::get('manage_gig','GigController@manage_gig');
Route::get('manage_work','GigController@manage_work');
Route::view('user_blog/{id}','my_blog');
Route::get('user_blog_category','UserController@read_blog_category');

Route::prefix('user')->group(function(){
    Route::view('dashboard','dashboard');
    // Route::get('get_category',"GigController@get_category");
    Route::post('create-blog-post','UserController@createBlogPost')->name('createBlogPost');

    Route::post('create-blog-comment','UserController@createBlogComment')->name('createBlogComment');
    Route::get('read-blog-comment/{id}','UserController@readBlogComment')->name('readBlogComment');
    Route::get('delete-blog-post/{id}','UserController@deleteBlogPost')->name('deleteBlogPost');

});

Route::group(['prefix' => 'admin'], function () {
    Route::view('/','adminDashboard');
    Route::get('read-blog-cat','blogController@createCat');
});
Route::get('read-blog-post/{id}','UserController@readBlogPost')->name('readBlogPost'); // editing
Route::view('login', 'login')->name('login');
Route::view('registration', 'register');

Route::view('otp/{id}','otp')->name('otp');
Route::post('sending-otp','AuthController@sendingOtp')->name('sending-otp');
Route::get('resend_otp/{id}','AuthController@process_otp')->name('resendOtp');

Route::post('registration', 'AuthController@registration')->name('registration');
Route::post('login', 'AuthController@process_login')->name('process_login');

Route::post("submit_gig","GigController@gig_post");
Route::post('get_category',"GigController@get_category");

Route::get('browse-blog','blogController@categories');
Route::view('blog/{id}', 'blog');
Route::post('create-blog-post','blogController@createBlogPost')->name('createBlogPost');
Route::post('read-blog-post','blogController@readBlogPost')->name('readBlogPost');
Route::post('create-blog-comment/{id}','blogController@createBlogComment')->name('createBlogComment');
Route::get('read-blog-comment/{id}','blogController@readBlogComment')->name('readBlogComment');
Route::post("hire_entrepreneur","GigController@hire_entrepreneur")->name('hire_entrepreneur');
