<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoPago
 */
class TipoPago extends Model
{
    protected $table = 'tiposPagos';

    public $timestamps = true;

    protected $fillable = [
        'nombre'
    ];

    protected $guarded = ['id'];

        
}