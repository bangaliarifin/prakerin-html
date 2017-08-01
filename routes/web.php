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

// Route::get('/orangtua', function(){
// 	$ortu = App\orangtua::all();
// 	foreach ($ortu as $key ) {
// 		echo $key->nama_ayah;
// 		echo " dengan ";
// 		echo $key->nama_ibu;
// 		echo " mempunyai anak ";
// 		foreach ($key->siswa as $data) {
// 			echo "<li>". $data->nama. "</li>";
// 		}
// 		echo "<hr>";
// 	}
	
// });

Route::get('/coba', 'myController@index');
Route::get('/coba2', 'myController@tampilmodel');
Route::get('/coba3', 'myController@tampilview');
Route::get('/coba4', 'myController@percobaan');

Route::resource('orangtua', 'OrangtuaController');

// Auth::routes();
Route::resource('orangtua','OrangtuaController');
Route::resource('siswa','SiswaControler');