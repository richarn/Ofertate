<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudad';
    protected $primaryKey = "idciudad";
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
