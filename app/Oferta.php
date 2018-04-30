<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = [
        'titulo', 'descripcion', 'file', 'idPais'
    ];


     public function pais()
    {
        return $this->belongsTo(Pais::class,'idPais');
    }


}
