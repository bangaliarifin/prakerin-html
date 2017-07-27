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

Route::get('/about/1', function(){
	return view('about');
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

