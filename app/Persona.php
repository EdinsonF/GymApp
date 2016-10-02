<?php

namespace Gym;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table='persona';

    protected $fillable=['cedula', 'nombres', 'telefono'];
}
