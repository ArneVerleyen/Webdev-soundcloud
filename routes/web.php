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


});




