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

Route::get('admin', function () {
    return view('auth.login');
});
Route::get('/', 'SiteController@index')->name('site.index');
Route::get('/about', 'SiteController@about')->name('site.about');
Route::get('/gallery', 'SiteController@about')->name('site.gallery');
Route::get('/rooms', 'SiteController@about')->name('site.rooms');
Route::get('/contact', 'SiteController@about')->name('site.contact');
Route::post('/roomsearch', 'SiteController@roomsearch')->name('roomsearch');
Route::get('/roombook/{id}', 'SiteController@roombook')->name('roombook')->middleware('buser');;


Route::get('/roomsearch', function(){
	return redirect('/');
});



Auth::routes();

Route::get('admin/home', 'AdminController@home')->name('home');

Route::get('admin/panel','AdminController@home')->name('adminhome');

//Admin - Room Tariffs 
Route::get('admin/createtarrif','TarrifController@index')->name('createtarrif');
Route::get('admin/deletetarrif/{id}','TarrifController@destroy');
Route::post('admin/createtarrif','TarrifController@store')->name('createtarrif');
Route::get('admin/edittarrif/{id}','TarrifController@edit');
Route::post('admin/updatetarrif','TarrifController@update')->name('updatetarrif');

//Admin - Rooms
Route::get('admin/createroom','RoomController@index')->name('roomcreate');
Route::post('admin/createroom','RoomController@store')->name('saveroom');

Route::get('admin/editroom/{id}','RoomController@edit')->name('editroom');
Route::get('admin/deleteroom/{id}','RoomController@destroy')->name('deleteroom');
Route::post('admin/editroom','RoomController@update')->name('editsaveroom');

Route::get('admin/allusers','UserviewController@getall')->name('allusers');
Route::get('admin/userdelete/{id}','UserviewController@userdelete');

//User 
Route::get('user/login', 'BuserController@login')->name('userlogin');
Route::get('user/logout', 'BuserController@logout')->name('userlogout');
Route::post('user/login', 'BuserController@verifylogin');




Route::group(['middleware' => ['buser']], function () {
	Route::get('/user', 'BuserController@index');
});




