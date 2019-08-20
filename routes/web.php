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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/complaint', 'ComplaintController@index00')->name('complaint');
Route::POST('/insert', 'ComplaintController@insert')->name('insert');

Route::get('/show', 'ComplaintController@show')->name('show');
Route::get('/edit/{id}', 'ComplaintController@edit')->name('edit');
Route::POST('/update/{id}', 'ComplaintController@update')->name('update');
Route::POST('/delete/{id}', 'ComplaintController@delete')->name('delete');

Route::get('/send/{id}', 'ComplaintController@send')->name('send');
Route::POST('/submit/{id}', 'ComplaintController@submit')->name('submit');

//Route::prefix('admin')->group(function(){
//Route::get('/login', 'Auth\AdminloginController@showLoginForm')->name('admin.login');
//Route::POST('/login', 'Auth\AdminloginController@login')->name('admin.login.submit');
//Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
//});

//Route::get('/admin/login', 'Auth\AdminloginController@showLoginForm')->name('admin.login');
//Route::POST('/admin/login', 'Auth\AdminloginController@login')->name('admin.login.submit');
//Route::get('/admin', 'AdminController@index');

 Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
   });

 Route::get('/mail', 'Mailcontroller@home');
 Route::POST('send/email', 'Mailcontroller@sendemail');

 Route::get('/newcomplaint', 'ComplaintController@show00')->name('newcomplaint');
  //Route::get('/action', 'ComplaintController@adminaction')->name('action');
  //Route::get('/action/{id}', 'ComplaintController@action')->name('action');
  Route::post('/action/{id}', 'ComplaintController@action')->name('action');
  Route::post('/complaintdetails/{id}', 'ComplaintController@complaintdetails')->name('complaintdetails');
  //Route::get('/details', 'ComplaintController@details')->name('details');







