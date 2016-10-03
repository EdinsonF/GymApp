<?php

namespace Gym;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Storage;

class Persona extends Model
{
    protected $table='persona';

    protected $fillable=['cedula', 'nombres', 'telefono', 'foto'];




public function setFotoAttribute($path){
     	
        if(!empty($path))
        {
        	
            $name=Carbon::now()->second.$path->getClientOriginalName();
            $this->attributes['foto']=Carbon::now()->second.$path->getClientOriginalName();
            \Storage::disk('local')->put($name,\File::get($path)); 
            
            
			
        }
}

 public static function getFoto($id){
        $registros = \DB::table('persona')->where( 'id',$id)
                                  ->select('foto')
                                  ->value('foto');

        return $registros;
    }





}
