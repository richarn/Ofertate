<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'Clientes';
    protected $primaryKey = "idClientes";
    public $timestamps = false;
    protected $fillable = [
    	'nombre','apellido',
    	'correo', 'ciudad_idciudad',
    	'sexo_idsexo'

    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $guarded=[
    ];

}
