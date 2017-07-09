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
        'id_proyectos',
        'id_colaboradores'
    ];

    protected $guarded = ['id'];

        
}