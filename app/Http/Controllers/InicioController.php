<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContenidoRequest;

class InicioController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){

    	$categoria = Categoria::all();

    	return view('inicio.index',[

            "categoria" => $categoria

            ]);
    }

    public function open_calzado(Request $request){

 		$dato = $request->get("categ");

        //return response()->json($dato);
        
        if($dato == "Categorias"){
            return redirect('/');
        }

        if($dato == "Calzados"){
            return redirect('calzado');
        }
        
        if($dato == "Remeras"){

            return redirect('remera');

        }

        if($dato == "Productos"){
            return redirect('producto');
        }

        if($dato == "Camisas"){
            return redirect('camisa');
        }

        if($dato == "Electrodomésticos"){
            return redirect('electro');
        }

    }

}