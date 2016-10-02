<?php

namespace Gym\Http\Controllers;

use Illuminate\Http\Request;

use Gym\Http\Requests;
use Gym\Gimnasio;
use Storage;
use Illuminate\Support\Facades\Validator;

class gymController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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




    }

    
    public function actualizarFoto(Request $request)
    {


            $id=$request->input('id_usuario_foto');
            $archivo = $request->file('imagen');
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

          

                 $imagen=Gimnasio::find($id);
                $imagen->fill($request->all());
                $imagen->save();
                //return var_dump($result);
                $result=Gimnasio::getImagen($id);
                return response()->json(
                    $result
                    );
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
