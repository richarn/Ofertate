<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vista extends Model
{
    protected $table = 'vistas';
    protected $primaryKey = "idvistas";
    public $timestamps = false;
    protected $fillable = [
		'fecha_', 'ofertas_idoferta',
		'Clientes_idClientes'

    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $guarded=[
    ];

}
