<?php

namespace App\Models;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RazonesSocial
 */
class RazonSocial extends Model
{
    protected $table = 'razonesSociales';

    public $timestamps = true;

    protected $fillable = [
        'prefijo',
        'descripcion'
    ];

    protected $guarded = ['id'];

    public function Clientes(){
        return $this->hasMany(Cliente::class);
    }
}