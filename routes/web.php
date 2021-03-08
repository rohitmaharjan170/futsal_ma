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

Auth::routes(['verify' => true]);

Route::get('/register', function(){
	return redirect('/errors/404');
});

// Route::get('/login', function(){
// 	return redirect('/errors/404');
// });

Route::get('/index', 'HomeController@index'); //->middleware('verified')
//Route::get('{path}', 'HomeController@index')->where( 'path','([A-z\d\-\/_.]+)' );
Route::view('/aboutus', 'master_index/about_us');
Route::view('/contactus', 'master_index/contact_us');


// player routes
	//register player routes
Route::post('/registerplayer', 'Registers\PlayerRegisterController@store_player')->name('player_register');

	//others player routes
Route::get('/playerdashboard', 'PlayerController@player_dashboard');



	//register futsal routes
Route::get('/registerplayer', 'Registers\PlayerRegisterController@register')->name('player_register');

// Route::post('/registerplayer', 'Registers\PlayerRegisterController@store_player')->name('player_register');


//futsaladmin routes
Route::view('/registerfutsal', 'registers/futsal_register');
Route::post('/registerfutsal', 'Registers\FutsalRegisterController@store_futsal_admin')->name('futsal_register');

Route::view('/loginfutsal', 'logins/futsal_login');

Route::get('/futsaldashboard', 'FutsalAdminController@futsal_dashboard');


//super admin
 Route::get('/superdashboard', 'SuperAdminController@master_admin');

Route::get('/listplayer', 'SuperAdminController@listPlayers');
Route::match(['put', 'patch'],'/updateplayer/{p_u_id}/{firstName}/{lastName}/{middleName}', 'SuperAdminController@updatePlayer');
Route::delete('/deleteplayer/{p_u_id}', 'SuperAdminController@deletePlayer');


Route::get('/listfutsal', 'SuperAdminController@listFutsals');


// jersey 
Route::resource('/pasal', 'JerseyController');

Route::get('/listjersey', 'JerseyController@listJerseys');
Route::match(['put', 'patch'],'/updatejersey/{j_sn}/{name}', 'JerseyController@updateJersey');
Route::delete('/deletejersey/{j_sn}', 'JerseyController@deleteJersey');