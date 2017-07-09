<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ColaboradorProyecto
 */
class ColaboradorProyecto extends Model
{
    protected $table = 'colaboradoresProyectos';

    public $timestamps = true;

    protected $fillable = [
        'proyecto_id',
        'colaborador_id'
    ];

    protected $guarded = ['id'];

        
}