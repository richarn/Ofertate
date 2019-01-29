<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CamisasController extends Controller
{
    public function __construct(){


    }

    public function index(){
    	
    	return view('camisas.camisa');
    }
}
