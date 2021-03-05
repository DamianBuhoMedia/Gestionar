<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iva extends Model{

    protected $table = 'iva';
    protected $primaryKey = 'id_iva';
    protected $fillable = ['id_iva','nombre_iva'];


}
