<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use App\asignaturas;
use App\Http\Requests\validacionasignaturas;

class materiacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $asignaturas = asignaturas::all();
        //dd("$asignaturas");
        return view('Materia.index')->with('asignaturas',$asignaturas);
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
        $rules = array(
            'Nombre' => 'required|max:50|unique:asignaturas,Nombre,',
          );
        $validator = Validator::make ( Input::all(), $rules);
        if ($validator->fails())
        return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
        else {
            $asignatura = new asignaturas();
            $asignatura->Nombre = $request->Nombre;
            $asignatura->save();
            return response()->json($asignatura);
        }

       /* $asignatura = new asignaturas();
        $asignatura->Nombre = $request->Nombre;
        $asignatura->save();
        return response()->json($asignatura); */
      
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
    public function eliminar($id)
    {
        //
    }
}
