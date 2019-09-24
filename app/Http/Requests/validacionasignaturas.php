<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validacionasignaturas extends FormRequest
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
        return [ // campo nombre validado para que no sea >50 y ademas sea Unico NO Exista
            'Nombre' => 'required|max:50|unique:asignaturas,Nombre,' . $this->route('id') 
        ];
    }
    public function messages()
    {
        return[
            // Mensaje que retornara si no pasa la validacion
            'Nombre.unique' => 'La asignatura ya existe'
        ];
        
    }
}
