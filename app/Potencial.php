<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Potencial extends Model
{
  protected $table = 'clientes';
  protected $primaryKey = 'id_cliente';
  protected $fillable = ['razonsocial_cliente' ,'telefono_cliente','mail_cliente','cargo_cliente','productor_cliente','tramite_cliente','cotizacion_cliente','potencial_cliente','servicio_cliente','cuit_cliente'];

}
