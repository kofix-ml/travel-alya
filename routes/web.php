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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

/*
|--------------------------------------------------------------------------
| Routes For Navigation (last edited : neonexxa)
|--------------------------------------------------------------------------
|
| No description
|
*/
	
Route::get('/navi/main','TravelController@main');
Route::get('/navi/applicants','TravelController@applicants');
Route::get('/navi/staffs','TravelController@staffs');
Route::get('/navi/traveldetails','TravelController@traveldetails');
Route::get('/navi/profile','TravelController@profile');

/*
|--------------------------------------------------------------------------
| Routes For Applicants (last edited : neonexxa)
|--------------------------------------------------------------------------
|
| No description
|
*/

Route::resource('/form/manifest','ApplicantController');


