<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
  protected $table = 'quotes';
  protected $primaryKey = 'id';
  protected $fillable = [
    'id',
    'serviceid',
    'subserviceid',
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
    'updated_at',
    'facturado'
];
}
