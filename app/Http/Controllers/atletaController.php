<?php

namespace Gym\Http\Controllers;

use Illuminate\Http\Request;

use Gym\Http\Requests;

use Gym\Http\Requests\InicioatletaRequest;


use Gym\User;
use Gym\Persona;
use Gym\Gimnasio;
use Gym\inter_user_gym;
use Session;

class atletaController extends Controller
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

    public function guardarAtleta(InicioatletaRequest $requestAtl)
    {
        if(isset($requestAtl['atleta_Btn'])){
            
            $id_persona= Persona::insertGetId([
            'cedula'        =>$requestAtl['cedula_atleta'],
            'nombres'       =>$requestAtl['nombres_atleta'],
            'telefono'      =>$requestAtl['telefono_atleta'],
            
            ]);
            User::create([
                'email'           =>$requestAtl['email_atleta'],
                'password'        =>$requestAtl['password_atleta'],
                'estatus'         =>'ACTIVO',
                'id_persona'      =>$id_persona,
                'id_tipo_usuario' =>3,
                
            ]);  
            
            Session::flash('mensaje','Usuario Registrado Exitosamente!');
            return redirect('/login');
            
        }else{

        }
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
        //
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
        //
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
