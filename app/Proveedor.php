<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
  protected $table = 'proveedores';
  protected $primaryKey = 'id_proveedor';

  protected $fillable = [
    'razonsocial_proveedor',
    'contacto_proveedor',
    'cuit_proveedor',
    'cbu_proveedor',
    'direccion_proveedor',
    'calle_proveedor',
    'numero_proveedor',
    'piso_proveedor',
    'oficina_proveedor',
    'localidad_proveedor',
    'cp_proveedor',
    'pais_proveedor',
    'provincia_proveedor',
    'telefono_proveedor',
    'fax_proveedor',
    'mailppal_proveedor',
    'mailsec_proveedor',
    'observaciones_proveedor',
  ];
}
