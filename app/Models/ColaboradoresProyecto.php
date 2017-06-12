<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ColaboradoresProyecto
 */
class ColaboradoresProyecto extends Model
{
    protected $table = 'colaboradoresProyectos';

    public $timestamps = true;

    protected $fillable = [
        'idProyecto',
        'idColaborador'
    ];

    protected $guarded = [];

        
}