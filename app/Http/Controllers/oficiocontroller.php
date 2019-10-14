<?php

namespace App\Http\Controllers;

#AQUI ESTUVO EL RISA

use Illuminate\Http\Request;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use App\oficios;
#use App\Http\Requests\validacionasignaturas;

class oficiocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $oficios = oficios::paginate(8); // retorna tabla oficio con su paginacion
        //dd("$oficio");
        return view('Oficio.index')->with('oficios',$oficios); 
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
            'Nombre' => 'required|max:50|unique:oficios,Nombre,', // regla de validacion del campo Nombre "Tabla Oficio"
          );
        $validator = Validator::make ( Input::all(), $rules);
        if ($validator->fails()) // si la regla de validacion no es cumplida retorna los errores
        return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
        else {
            $oficio = new oficios();
            $oficio->Nombre = $request->Nombre;
            $oficio->save();
            return response()->json($oficio); // si el dato es guardado, retorna el dato guardado
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
    public function editar($id)
    {
        //
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
    public function eliminar(request $request) //metodo para eliminar una materia
    {
        
    }
}
