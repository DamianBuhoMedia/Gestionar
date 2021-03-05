<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iibb extends Model{

    protected $table = 'iibb';
    protected $primaryKey = 'id_iibb';
    protected $fillable = ['id_iibb','nombre_iibb'];


}
