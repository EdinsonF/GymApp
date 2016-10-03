<?php

namespace Gym\Http\Controllers;

use Illuminate\Http\Request;

use Gym\Http\Requests;

use Gym\Http\Requests\IniciogymRequest;

use Gym\User;
use Gym\Persona;
use Gym\Gimnasio;
use Gym\inter_user_gym;
use Session;


class GymController extends Controller
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

    public function guardarGym(IniciogymRequest $requestGym)
    {
        if(isset($requestGym['gym_Btn'])){
            
            $id_persona= Persona::insertGetId([
            
            'nombres'       =>$requestGym['nombres_gym_persona'],
            
            ]);
        
            User::create([
                'email'           =>$requestGym['email_gym'],
                'password'        =>$requestGym['password_gym'],
                'estatus'         =>'ACTIVO',
                'id_persona'      =>$id_persona,
                'id_tipo_usuario' =>2,
                
                
            ]);

            $id_usuario=User::all()->last()->id;
            
            $id_gym=Gimnasio::insertGetId([
                'nombre_gimnasio' =>$requestGym['nombre_gym'],
                'estatus'         =>'ACTIVO',
                'direccion'        =>$requestGym['direccion_gym'],
                
                ]);
            inter_user_gym::create([
                'id_usuario'    =>$id_usuario,
                'id_gimnasio'   =>$id_gym,
                'estatus'        =>'ACTIVO',

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
