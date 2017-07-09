<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Colaborador
 */
class Colaborador extends Model
{
    protected $table = 'colaboradores';

    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'domicilio',
        'telefono',
        'cuenta',
        'banco_id',
        'RazonSocial_id'
    ];

    protected $guarded = ['id'];

        
}