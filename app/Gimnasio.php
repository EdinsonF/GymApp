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

    public static function ConsultarAll($id)
    {
      $registros=\DB::table('inter_user_gym')->join('users','inter_user_gym.id_usuario','=','users.id' )
                                            ->join('gimnasio','inter_user_gym.id_gimnasio','=','gimnasio.id')
                                            ->where( 'users.id',$id)
                                            ->select('gimnasio.*')
                                            ->get();
      return $registros;


    }

    public static function ConsultaID($id)
    {
      $registros=\DB::table('inter_user_gym')->join('users','inter_user_gym.id_usuario','=','users.id' )
                                            ->join('gimnasio','inter_user_gym.id_gimnasio','=','gimnasio.id')
                                            ->where( 'users.id',$id)
                                            ->select('gimnasio.id')
                                            ->value('id');
      return $registros;


    }

}
