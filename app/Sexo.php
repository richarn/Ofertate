<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    protected $table = 'sexo';
    protected $primaryKey = "idsexo";
    public $timestamps = false;
    protected $fillable = [
		'descripcion'

    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $guarded=[
    ];

}