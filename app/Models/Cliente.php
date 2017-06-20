<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 */
class Cliente extends Model
{
    protected $table = 'clientes';

    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'telefono',
        'domicilio',
        'idRazonSocial'
    ];

    protected $guarded = ['id'];

        
}