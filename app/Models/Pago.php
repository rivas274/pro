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
        'id_proyectos',
        'id_colaboradores',
        'id_tiposPagos'
    ];

    protected $guarded = ['id'];

        
}