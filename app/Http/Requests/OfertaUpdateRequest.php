<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfertaUpdateRequest extends FormRequest
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
         $rules = [
            'titulo' => 'required|string|max:191',
            'descripcion' => 'required|string|max:255',
            'idPais'=>'required',
            'file'   => 'nullable|mimes:jpg,jpeg,png,gif,mp4|max:20000'
            
        ];
 
        return $rules;
        

    }


     public function messages(){
       return [
         'idPais.required' => "El campo pais es requerido",
         'file.mimes'=> "La extension del archivo debe ser jpg,jpeg,png,gif,mp4",
         'file.max' => "El archivo debe pesar menos de 20 MB",
             ];
     }


}


