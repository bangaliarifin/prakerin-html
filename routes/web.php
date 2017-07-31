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

Route::get('/about',function(){
	return '<h1>halo</h1>'
	.'selamat datang di web app saya <br>'
	.'laravel , emang keren.';
});

Route::get('/latihan', function(){
	return view('about');
});

Route::get('/about', function(){
	return view('hallo');
});

Route::get('/about/2', function(){
	return view('about_2');
});

Route::get('/about/3', function(){
	return view('about_3');
});

Route::get('/about/satu', function(){
	return view('about.about1');
});

Route::get('/about/dua', function(){
	return view('about.about2');
});

Route::get('/about/tiga', function(){
	return view('about.about3');
});

Route::get('/about/{bangbeben}/{jamikan}/{pusing}', function($a,$b,$c){
	return 'nama: '.$a.'<br>alamat: '.$b.'<br>umur: '.$c;
});

Route::get('/about/{nama}', function(){
	$a="john";
	return 'ini alamat about '.$a;
});

Route::get('/testmodel', function(){
	$a = App\post::where('title','like','%cepat nikah%')->get();
	return $a;
});
Route::get('/satumodel', function(){
	$a = App\post::find(1);
	return $a;
});
Route::get('/semuamodel', function(){
	$a = App\post::all();
	return $a;
});
Route::get('/gantimodel', function(){
	$a = App\post::find(1);
	$a ->delete();
	
});
Route::get('/menambahmodel', function(){
	$a = new App\post;
	$a->title ="7 Amalan pembuka jodoh";
	$a->content = "shalat malam, sedekah, puasa sunah, silahturahmi, senyum, dan tobat";
	$a->save();
	return $a;
});
Route::get('/rubahmodel', function(){
	$a = App\post::find(2);
	$a->title = "kelurga sakinah";
	return $a;
});

Route::get('/cektampilan', function(){
	return view('layouts.masters');
});

Route::get('/halo', function(){
	return view('index');
});

Route::get('/orangtua', function(){
	$ortu = App\orangtua::all();
	foreach ($ortu as $key ) {
		echo $key->nama_ayah;
		echo " dengan ";
		echo $key->nama_ibu;
		echo " mempunyai anak ";
		foreach ($key->siswa as $data) {
			echo "<li>". $data->nama. "</li>";
		}
		echo "<hr>";
	}
	
});

Route::get('/coba', 'myController@index');
Route::get('/coba2', 'myController@tampilmodel');
Route::get('/coba3', 'myController@tampilview');
Route::get('/coba4', 'myController@percobaan');
