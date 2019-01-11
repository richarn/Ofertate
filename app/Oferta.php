<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'ofertas';
    protected $primaryKey = "idoferta";
    public $timestamps = false;
    protected $fillable = [
		'descripcion_producto', 'nombre_producto',
		'precio_anterior', 'precio_oferta',
		'imagen', 'fecha_inicio', 'fecha_fin', 	
		'tiendas_idtienda', 'categorias_idcategoria' 

    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $guarded=[
    ];

}
