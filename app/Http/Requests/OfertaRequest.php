<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfertaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => 'required|string|max:191',
            'descripcion' => 'required|string|max:255',
            'file' => 'required|mimes:pdf|max:10000',
            'idPais'=>'required',
        ];
    }


   public function messages(){
       return [
         'file.required' => "El campo archivo es necesario",
         'file.max' => "El archivo debe pesar menos de 10 MB",
         'idPais.required' => "El campo pais es requerido",
         'file.mimes'=> "La extension del archivo debe ser SOLO pdf",
             ];
     }

}
