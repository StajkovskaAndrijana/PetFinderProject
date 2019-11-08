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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/')->name('homepage')->uses('HomePageController@showHomePage');

Route::get('/user')->name('user')->uses('UserController@user_pprofile');
Route::get('/account')->name('account')->uses('UserController@account');
Route::get('/saved_searches')->name('saved_searches')->uses('UserController@saved_searches');
Route::get('/user/pet', 'UserController@pet_add')->name('pet_add');
Route::get('/delete/pet/{id}', 'UserController@delete_pet')->name('delete_pet');
Route::post('/pet/save', 'UserController@pet_save')->name('pet_save');
Route::post('/upload/images', 'UserController@upload_images')->name('upload_images');
Route::post('/user/update', 'UserController@user_update')->name('user_update');

Route::get('/pet_profile/{name}', 'PetController@pet_profile')->name('pet_profile');
Route::get('/search', 'PetController@search')->name('search');
Route::post('/search/pet', 'PetController@search_pet')->name('search_pet');

