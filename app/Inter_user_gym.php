<?php

namespace Gym;

use Illuminate\Database\Eloquent\Model;

class Inter_user_gym extends Model
{
    protected $table='inter_user_gym';

    protected $fillable=['id_usuario','id_gimnasio','estatus'];
}
