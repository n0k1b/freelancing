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
Route::view('/','index')->name('home');
Route::get('view_all_gig','GigController@view_all_gig');
Route::post('search_gig','GigController@view_gig');
Route::get('get_gig_details/{gig_id}','GigController@get_gig_details')->name('gig_details');
Route::get('payment_gateway/{gig_id}','GigController@payment_gateway')->name('gig_details');
Route::view('login', 'login');
Route::view('dashboard', 'dashboard2')->name('dashboard');
//Route::view('see_notification', 'notification');
Route::get('see_notification_entrepreneur',"GigController@see_notification_entrepreneur");
Route::get('manage_hire','GigController@manage_hire')->name('manage_hire');
Route::post('submit_review','GigController@submit_review');
Route::get('manage_gig','GigController@manage_gig');
Route::get('manage_work','GigController@manage_work');
Route::view('user_blog/{id}','my_blog');
Route::get('user_blog_category','UserController@read_blog_category');

Route::prefix('user')->group(function(){
    Route::view('dashboard','dashboard');
    // Route::get('get_category',"GigController@get_category");

   // Route::post('create-blog-post','UserController@createBlogPost')->name('createBlogPost');

    Route::post('create-blog-comment','UserController@createBlogComment')->name('createBlogComment');
    Route::get('read-blog-comment/{id}','UserController@readBlogComment')->name('readBlogComment');
    Route::get('delete-blog-post/{id}','UserController@deleteBlogPost')->name('deleteBlogPost');

});

Route::group(['prefix' => 'admin'], function () {
    Route::view('create-blog-cat','admin.createBlogCategory');
    Route::post('create-blog-cat','blogController@createBlogCat');
    Route::get('/','blogController@readBlogCat');
    Route::get('edit-blog-cat/{id}','blogController@editBlogCat');
    Route::get('delete-blog-cat/{id}','blogController@deleteBlogCat');
    Route::post('update-blog-cat','blogController@updateBlogCat');

    Route::view('create-gig-cat','admin.createGigCategory');
    Route::post('create-gig-cat','GigController@createGigCat');
    Route::get('gig-categories','gigController@readGigCat');
    Route::get('edit-gig-cat/{id}','GigController@editGigCat');
    Route::get('delete-gig-cat/{id}','GigController@deleteGigCat');
    Route::post('update-gig-cat','GigController@updateGigCat');

    Route::get('blog-report','blogController@blogReport');

});
Route::get('read-blog-post/{id}','UserController@readBlogPost')->name('readBlogPost'); // editing
Route::view('login', 'login')->name('login');
Route::view('registration', 'register')->name('register');

Route::view('otp/{id}','otp')->name('otp');
Route::post('sending-otp','AuthController@sendingOtp')->name('sending-otp');
Route::get('resend_otp/{id}','AuthController@process_otp')->name('resendOtp');

Route::post('registration', 'AuthController@registration')->name('registration');
Route::post('login', 'AuthController@process_login')->name('process_login');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::post("submit_gig","GigController@gig_post");
Route::post('get_category',"GigController@get_category");

Route::get('browse-blog','blogController@categories');
Route::view('blog/{id}', 'blog');
Route::post('create-blog-post','blogController@createBlogPost')->name('createBlogPost');
Route::post('read-blog-post','blogController@readBlogPost')->name('readBlogPost');
Route::post('create-blog-comment/{id}','blogController@createBlogComment')->name('createBlogComment');
Route::get('read-blog-comment/{id}','blogController@readBlogComment')->name('readBlogComment');
Route::post("hire_entrepreneur","GigController@hire_entrepreneur")->name('hire_entrepreneur');

Route::post('payment_confirmation',"GigController@payment_confirmation");

// SSLCOMMERZ Start
Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');

Route::post('/pay', 'SslCommerzPaymentController@index');
Route::post('pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END
