<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipovendedores extends Model
{
    protected $fillable = ['nombre_tipo'];

      public function user(){
    	return $this->hasMany(Tipovendedores::class);
    }

}
