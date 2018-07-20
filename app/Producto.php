<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  
  protected $fillable = ['nombre','descripcion_pdf','foto','video_youtube_1','video_youtube_2','idLineaNegocio'];

   public function lineaNegocio(){
     return $this->belongsTo(LineaNegocio::class,'idLineaNegocio');
   }



}
