<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicios";
    protected $primaryKey = "id_servicio";
    protected $fillable = ['nombre_servicio','dependencia'];
}
