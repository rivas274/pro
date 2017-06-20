<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Colaboradore
 */
class Colaboradore extends Model
{
    protected $table = 'colaboradores';

    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'domicilio',
        'telefono',
        'cuenta',
        'idBanco',
        'idRazonSocial'
    ];

    protected $guarded = ['id'];

        
}