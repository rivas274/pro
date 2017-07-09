<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 */
class Proyecto extends Model
{
    protected $table = 'proyectos';

    public $timestamps = true;

    protected $fillable = [
        'descripcion',
        'cauntia',
        'fechaInicio',
        'fechaFin',
        'cliente_id'
    ];

    protected $guarded = ['id'];

        
}