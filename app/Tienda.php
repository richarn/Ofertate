<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $table = 'tiendas';
    protected $primaryKey = "idtienda";
    public $timestamps = false;
    protected $fillable = [
		'descripcion', 'correo',
		'direccion', 'telefono'

    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $guarded=[
    ];

}