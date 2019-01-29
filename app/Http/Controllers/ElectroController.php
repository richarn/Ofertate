<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectroController extends Controller
{
    public function __construct(){

    }

    public function index(){

    	return view('electrodomesticos.electrodo');
    }
}
