<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function __construct(){

    }

    public function index(){

    	return view('p_alimenticios.p_alimenticio');
    }
}
