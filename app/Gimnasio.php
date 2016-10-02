<?php

namespace Gym;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Storage;

class Gimnasio extends Model
{
    protected  $table='gimnasio';
    protected  $fillable=['nombre_gimnasio', 'imagen','estatus','direccion'];



     public function setImagenAttribute($path){
     	
        if(!empty($path))
        {
        	
            $name=Carbon::now()->second.$path->getClientOriginalName();
            $this->attributes['imagen']=Carbon::now()->second.$path->getClientOriginalName();
            \Storage::disk('local')->put($name,\File::get($path)); 
            
            
			
        }
}

 public static function getImagen($id){
        $registros = \DB::table('gimnasio')->where( 'id',$id)
                                  ->select('imagen')
                                  ->value('imagen');

        return $registros;
    }

}
