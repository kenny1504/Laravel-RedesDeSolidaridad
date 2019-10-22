<?php

namespace App\Http\Controllers;

#AQUI ESTUVO EL RISA

use Illuminate\Http\Request;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use App\parentescos;
use App\Http\Requests\validacionparentescos;

class parentescocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $parentescos = parentescos::paginate(8); // retorna tabla parentesco con su paginacion
        //dd("$parentesco");
        return view('Parentesco.index')->with('parentescos',$parentescos); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function guardar(Request $request){
        $rules = array( //reglas de validaciones
            'Nombre' => 'required|max:50|unique:parentescos,Parentesco,', // regla de validacion del campo Nombre "Tabla Parentesco"
          );
        $validator = Validator::make ( Input::all(), $rules);
        if ($validator->fails()) // si la regla de validacion no es cumplida retorna los errores
        return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
        else {
            $parentesco = new parentescos();
            $parentesco->Parentesco = $request->Nombre;
            $parentesco->save();
            return response()->json($parentesco); // si el dato es guardado, retorna el dato guardado
        }

      
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar(Request $request)
    {
        //
        $rules = array( //reglas de validaciones
            'Nombre' => 'required|max:50|unique:parentescos,Parentesco,', // regla de validacion del campo Nombre "Tabla Parentesco"
          );
        $validator = Validator::make ( Input::all(), $rules);
        if ($validator->fails()) // si la regla de validacion no es cumplida retorna los errores
        return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
        else {
                $parentescos = parentescos::find ($request->id);
                $parentescos->Parentesco = $request->Nombre;
                $parentescos->save();
                return response()->json($parentescos);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar(request $request) //metodo para eliminar un parentesco
    {
        $parentesco = parentescos::find ($request->id)->delete(); //elimina parentesco
        return response()->json(); //retorna un json
    }
}
