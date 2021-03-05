<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subservicio extends Model
{
  protected $table = 'subservicios';
  protected $primaryKey = 'id_subservicio';
  protected $fillable = ['nombre_subservicio','precio_subservicio','idpadre_subservicio'];
}
