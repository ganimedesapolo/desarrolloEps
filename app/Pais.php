<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
	protected $fillable = ['nombre','codigo'];
    
       public function oferta()
    {
        return $this->hasMany(Oferta::class);
    }

    public function user(){
    	return $this->hasMany(User::class);
    }
   

}
