<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validacionparentescos extends FormRequest
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
            'Nombre_parentesco' => 'required|max:50|unique:parentescos,Nombre_parentesco,' . $this->route('id') 
        ];
    }
    public function messages()
    {
        return[
            // Mensaje que retornara si no pasa la validacion
            'Nombre_parentesco.unique' => 'El Parentesco ya existe'
        ];
        
    }
    public function response(array $errors){
        if ($this->ajax()){
            return response()->json($errors, 200);
        }
        else
        {
        return redirect($this->redirect)
                ->withErrors($errors, 'formulario')
                ->withInput();
        }
    }
}
