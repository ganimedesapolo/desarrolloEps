<?php

namespace App\Http\Requests;
use App\User;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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

     ///  $user = User::find($this->users);


        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$this->user,
            'password' => 'required|string|min:6|confirmed',
            'rol'=>'required',
            'idPais'=>'required',
            'idTipovendedor'=>'required'
        ];
    }


        public function messages(){
         return [
                     'name.required' => "El campo Nombre es necesario",
                     'rol.required' => "El campo Administrador es necesario",
                     'idPais.required' => "El campo pais es requerido",
                     'idTipovendedor.required' => "El campo Vendedor es requerido",
                ];
     }

}



  /// 'slug'          => 'required|unique:posts,slug,' . $this->post,
 


 