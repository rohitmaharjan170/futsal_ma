<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/register', function(){
	return redirect('/errors/404');
});

// Route::get('/login', function(){
// 	return redirect('/errors/404');
// });

Route::get('/index', 'HomeController@index');
//Route::get('{path}', 'HomeController@index')->where( 'path','([A-z\d\-\/_.]+)' );


// player routes
	//register player routes
Route::post('/registerplayer', 'Registers\PlayerRegisterController@store_player')->name('player_register');

	//others player routes
Route::get('/playerdashboard', 'PlayerController@player_dashboard');



	//register futsal routes
Route::get('/registerplayer', 'Registers\PlayerRegisterController@register')->name('player_register');

Route::post('/registerplayer', 'Registers\PlayerRegisterController@store_player')->name('player_register');


//futsaladmin routes
Route::get('/futsaldashboard', 'AdminController@futsal_dashboard');


//super admin
 Route::get('/superdashboard', 'SuperAdminController@master_admin');




 