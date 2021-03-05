<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productor extends Model
{
    protected $table = 'productores';
    protected $primaryKey = 'id_productor';

    protected $fillable = [
      'nombre_productor',
      'cuit_productor',
      'direccion_productor',
      'calle_productor',
      'numero_productor',
      'piso_productor',
      'oficina_productor',
      'localidad_productor',
      'cp_productor',
      'pais_productor',
      'provincia_productor',
      'telefono_productor',
      'fax_productor',
      'mailppal_productor',
      'mailsec_productor',
      'observaciones_productor',
      'contact1cargo_productor',
      'contact1telefono_productor',
      'contact1celular_productor',
      'contact1mail_productor',
      'contact2cargo_productor',
      'contact2telefono_productor',
      'contact2celular_productor',
      'contact2mail_productor',
      'contact3cargo_productor',
      'contact3telefono_productor',
      'contact3celular_productor',
      'contact3mail_productor'
    ];
}
