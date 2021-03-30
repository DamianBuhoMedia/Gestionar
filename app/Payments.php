<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
  protected $table = 'payments';
  protected $primaryKey = 'id';
  protected $fillable = [
    'id',
    'servicio_id',
    'fecha_factura',
    'numero_factura',
    'monto_factura',
    'empresa_factura',
    'cliente_factura',
    'step_factura',
    'color_factura'
  ];
}
