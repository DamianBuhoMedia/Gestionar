<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioContratado extends Model
{
  protected $table = "servicioscontratados";
  protected $primaryKey = "id_serviciocontratado";
  protected $fillable = [
    'cliente__serviciocontratado',
    'quote',
    'servicio_serviciocontratado',
    'servicio_cantidad',
    'sub_servicio_serviciocontratado',
    'servicio_detalle',
    'alerta_serviciocontratado',
    'vencimiento_serviciocontratado',
    'observciones_serviciocontratado',
    'alertacliente_serviciocontratado',
    'alertami_serviciocontratado',
    'cotizacion_serviciocontratado',
    'cotizacion_aprobado',
    'serviciocontratado_pago1',
    'serviciocontratado_pago2',
    'serviciocontratado_pago3',
    'facturanumero',
    'fechafactura',
    'updated_ad',
    'created_at',
  ];
}
