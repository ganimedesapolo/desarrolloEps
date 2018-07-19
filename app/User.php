<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'rol','idPais','idTipovendedor',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


   ///relaciones foraneas
   public function pais(){
     return $this->belongsTo(Pais::class,'idPais');

   }

    public function tipovendedor(){
     return $this->belongsTo(Tipovendedores::class,'idTipovendedor');

   }





}
