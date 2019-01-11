<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto_guardado extends Model
{
    protected $table = 'productos_guardados';
    protected $primaryKey = "idprodGuard";
    public $timestamps = false;
    protected $fillable = [
		'Clientes_idClientes', 'ofertas_idoferta' 

    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $guarded=[
    ];

}