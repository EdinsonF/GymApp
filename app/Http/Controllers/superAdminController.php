<?php

namespace Gym\Http\Controllers;

use Illuminate\Http\Request;

use Gym\Http\Requests;
use Gym\Http\Requests\StoresuperadminRequest;

use Gym\User;
use Gym\Persona;
use Session;

class superAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Inicio.admin');
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
    public function store(StoresuperadminRequest $request)
    {
        $id_persona= Persona::insertGetId([
            'cedula'        =>$request['cedula'],
            'nombres'       =>$request['nombres'],
            'telefono'      =>$request['telefono'],
            
            ]);
            User::create([
                'email'           =>$request['email'],
                'password'        =>$request['password'],
                'estatus'         =>'ACTIVO',
                'id_persona'      =>$id_persona,
                'id_tipo_usuario' =>1,
                
            ]);  
            
            Session::flash('mensaje','Usuario Registrado Exitosamente!');
            return redirect('/login');
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
