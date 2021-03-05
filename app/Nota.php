<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
  protected $table = 'notas';
  protected $primaryKey = 'id_nota';
  protected $fillable = ['user_nota','cliente_nota','mensaje_nota','recordar_nota'];
}
