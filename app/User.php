<?php

namespace Gym;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password','id_persona','id_tipo_usuario', 'estatus',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFullNameAttribute(){

        $registros = \DB::table('users')->join('persona','persona.id','=','users.id_persona' )->where( 'users.email',$this->email)
                                  ->select('persona.nombres')
                                  ->value('nombres');

        return $registros;
    }

    public function setPasswordAttribute($valor)
    {
        if(!empty($valor)){

            $this->attributes['password']=\Hash::make($valor);

        }

    }



}
