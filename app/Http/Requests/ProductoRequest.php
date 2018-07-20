<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
            'nombre' => 'required',
            'idLineaNegocio' => 'required',
            'descripcion_pdf'  => 'nullable|mimes:pdf|max:10000',
            'foto' => 'nullable|mimes:jpeg,jpg,png|max:10000',
            'video_youtube_1' => 'nullable|url',
            'video_youtube_2' => 'nullable|url',
        ];
    }


    public function messages(){
       return [
                 'nombre.required' => "El nombre es requerido",
                 'idLineaNegocio.required' => "La linea de Negocio es requerida",
                  'descripcion_pdf.mimes'=> "La extension del archivo Descripcion debe ser SOLO pdf",
                  'descripcion_pdf.max' => "El archivo Descripcion debe pesar menos de 10 MB",
                  'foto.mimes'=> "La extension del archivo Fotografia debe ser SOLO jpeg,jpg,png",
                  'foto.max' => "El archivo Fotografia debe pesar menos de 10 MB",
             ];
     }
}
