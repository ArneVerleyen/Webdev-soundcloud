<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\DonateController;
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
Route::post('/donate/make', 'DonateController@makeDonation')->name('makeDonation');

Route::get('/payment','DonateController@getMakePayment')->name('makePayment');
Route::get('/succes', 'DonateController@')->name('payment.succes');

Route::get('/donate/list', 'DonateController@getDonations')->name('donate.list');




});

Route::name('webhooks.mollie')->post('webhooks/mollie', 'WebhookController@handle');

// admin
Route::get('admin', 'DashboardController@getIndex')->name('dashboard');

// Blogs
Route::get('admin/blogs', 'admin\BlogController@getIndex')->name('admin.blogs');
Route::get('admin/blogs/new', 'admin\BlogController@getCreate')->name('blogs.new');
Route::get('admin/blogs/{album?}', 'admin\BlogController@getEdit')->name('blogs.edit');
Route::post('admin/blogs/save', 'admin\BlogController@postSave')->name('blogs.save');
Route::delete('admin/blogs/{album?}', 'admin\BlogController@destroy')->name('blogs.destroy');

// Home
Route::get('admin/home', 'admin\HomeController@getIndex')->name('admin.home');
Route::get('admin/home/new', 'admin\HomeController@getCreate')->name('home.new');
Route::get('admin/home/{home?}', 'admin\HomeController@getEdit')->name('home.edit');
Route::post('admin/home/save', 'admin\HomeController@postSave')->name('home.save');
Route::delete('admin/home/{home?}', 'admin\HomeController@destroy')->name('home.destroy');

// Donations

Route::get('admin/donations', 'admin\DonateController@getDonationsAdmin')->name('admin.donations');




