<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table= 'categorias';
    protected $primaryKey='idcategoria';
    public $timestamps = false;
    protected $fillable = [
        'descripcion' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
    ];
}