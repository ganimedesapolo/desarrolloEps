<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Oferta extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'file' => $this->file,
            'idLineaNegocio' => $this->idLineaNegocio,
            'pais' => $this->pais,
            
        ];
    }
}
