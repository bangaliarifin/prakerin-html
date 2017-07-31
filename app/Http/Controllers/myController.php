<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;

class myController extends Controller
{
    //
    public function index()
    {
    	$a = "Ali Arifin";
    	return $a;
    }

    public function tampilmodel()
    {
    	$ortu = orangtua::all();
    	return $ortu;
    }
    public function tampilview()
    {
    	return view('hallo');
    }
    public function percobaan()
    {
    	$ortu = orangtua::all();
    	return view('hallo',compact('ortu'));
    }
} 


