<?php

use App\Http\Controllers\AlbumController;
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

Route::redirect('/', '/en');


Route::group(['prefix' => '{language?}'],
 function () {
Route::get('/', 'HomeController@getIndex')->name('home');

Route::get('/contact', 'MailController@getContact')->name('contact');
Route::post('/contact', 'MailController@postContact')->name('contact.save');

Route::get('/about', 'AboutController@getIndex')->name('about');

Route::get('/albums', 'AlbumController@getIndex')->name('albums');
Route::get('/albums/{id?}', 'AlbumController@show')->name('albums.show');

Route::get('/donate', 'DonateController@getDonatePage')->name('donate');

Route::get('/admin', 'DashboardController@getIndex')->name('dashboard');



});

Route::name('webhooks.mollie')->post('webhooks/mollie', 'WebhookController@handle');

// admin

// Blogs
Route::get('admin/blogs', 'admin\BlogController@getIndex')->name('admin.blogs');
Route::get('admin/blogs/new', 'admin\BlogController@getCreate')->name('blogs.new');
Route::get('admin/blogs/{album?}', 'admin\BlogController@getEdit')->name('blogs.edit');
Route::post('admin/blogs/save', 'admin\BlogController@postSave')->name('blogs.save');
Route::delete('admin/blogs/{album?}', 'admin\BlogController@destroy')->name('blogs.destroy');

// Home
Route::get('admin/home', 'admin\HomeController@getIndex')->name('admin.home');
Route::get('admin/home/new', 'admin\HomeController@getCreate')->name('home.new');
Route::get('admin/home/{language?}', 'admin\HomeController@getEdit')->name('home.edit');
Route::post('admin/home/save', 'admin\HomeController@postSave')->name('home.save');
Route::delete('admin/home/{language?}', 'admin\HomeController@destroy')->name('home.destroy');






