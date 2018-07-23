<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = [
        'titulo', 'descripcion', 'file', 'idPais','idLineaNegocio'
    ];


     public function pais()
    {
        return $this->belongsTo(Pais::class,'idPais');
    }

    public function lineaNegocio(){
    	return $this->belongsTo(LineaNegocio::class,'idLineaNegocio');
    }


}
