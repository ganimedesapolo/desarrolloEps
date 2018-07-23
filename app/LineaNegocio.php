<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineaNegocio extends Model
{
    
      public function producto(){
    	return $this->hasMany(Producto::class);
    }


      public function oferta(){
    	return $this->hasMany(Oferta::class);
    }


}
