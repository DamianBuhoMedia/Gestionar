<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioContratado extends Model
{
  protected $table = "servicioscontratados";
  protected $primaryKey = "id_serviciocontratado";
  protected $fillable = [
    'cliente__serviciocontratado',
    'servicio_serviciocontratado',
    'sub_servicio_serviciocontratado',
    'alerta_serviciocontratado',
    'vencimiento_serviciocontratado',
    'observciones_serviciocontratado',
    'alertacliente_serviciocontratado',
    'alertami_serviciocontratado',
    'cotizacion_serviciocontratado',
    'updated_ad',
    'created_at'
  ];
}
