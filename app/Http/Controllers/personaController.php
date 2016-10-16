<?php

namespace Gym\Http\Controllers;

use Illuminate\Http\Request;

use Gym\Http\Requests;
use Gym\Persona;
use Gym\User;
use Illuminate\Support\Facades\Validator;
use Auth;

class personaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Administrador.Perfil.perfil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $datos=Persona::ConsultarAll(Auth::user()->id_persona);
        
         return response()->json(
            ['datos' =>$datos]
            );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $persona=Persona::find(Auth::user()->id_persona);
        $persona->fill($request->all());
        $persona->save();
        try{
            // lógica para hacer la inserción
            return response()->json(array('status' => 'success'));
        }catch(Exception $e){
            return response()->json(array('status' => 'error')); //$e->getMessage() sólo para versión en desarrollo, puede cambiarse después por algo como 'Un error ha ocurrido'
        }
    }


    

    public function actualizarFoto(Request $request)
    {

            $id=Auth::user()->id_persona;
            $archivo = $request->file('foto');
            $input  = array('image' => $archivo) ;
            $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:2000');
            $validacion = Validator::make($input,  $reglas);
            if ($validacion->fails())
            {
              return response()->json([
                    "mensaje"=>"Error de Imagen"
                    ]);
            }

            // $nombre_original=$archivo->getClientOriginalName();
            // $extension=$archivo->getClientOriginalExtension();
            // $nuevo_nombre="userimagen-".$id.".".$extension;

                

                $imagen=Persona::find($id);
                $imagen->fill($request->all());
                $imagen->save();
                //return var_dump($result);
                $result=Persona::getFoto($id);
                return response()->json(
                    $result
                    );
   
    }


    public function destroy($id)
    {
        //
    }
}
