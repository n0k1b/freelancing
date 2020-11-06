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

Route::post("submit_gig","GigController@gig_post");
Route::view('blog', 'blog');
Route::get('get_category',"GigController@get_category");
