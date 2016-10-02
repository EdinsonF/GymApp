<?php 

namespace Gym;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model {

	protected $table = 'ciudades';
	public $timestamps = false;

	public function estado()
    {
        return $this->belongsTo('Estado', 'estado_id', 'id');
    }

}