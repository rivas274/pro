<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 */
class Pago extends Model
{
    protected $table = 'pagos';

    public $timestamps = true;

    protected $fillable = [
        'concepto',
        'monto',
        'fechaPago',
        'idProyecto',
        'idColaborador',
        'idTipoPago'
    ];

    protected $guarded = [];

        
}