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

Route::get('/', function () {
    return redirect('/index');
});

Auth::routes();

Route::get('/index', 'HomeController@index');
//Route::get('{path}', 'HomeController@index')->where( 'path','([A-z\d\-\/_.]+)' );


// player routes
Route::get('/playerdashboard', 'PlayerController@player_dashboard');


//futsaladmin routes
Route::get('/futsaldashboard', 'AdminController@futsal_dashboard');


//super admin
 Route::get('/superdashboard', 'SuperAdminController@master_admin');




 