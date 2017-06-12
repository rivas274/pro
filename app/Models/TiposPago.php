<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposPago
 */
class TiposPago extends Model
{
    protected $table = 'tiposPagos';

    public $timestamps = true;

    protected $fillable = [
        'nombre'
    ];

    protected $guarded = [];

        
}