<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RazonesSociale
 */
class RazonesSociale extends Model
{
    protected $table = 'razonesSociales';

    public $timestamps = true;

    protected $fillable = [
        'prefijo',
        'descripcion'
    ];

    protected $guarded = ['id'];

        
}