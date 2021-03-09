<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
  protected $table = 'facturas';
  protected $primaryKey = 'id';
  protected $fillable = [
    'id',
    'serviceid',
    'clientid',
    'amount',
    'observation',
    'empresa',
    'banco',
    'paymentcondition',
    'paymentform1',
    'paymentform2',
    'paymentform3',
    'created_at',
    'updated_at'
];
}
