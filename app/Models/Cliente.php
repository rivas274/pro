<?php

namespace App\Models;

use App\Models\RazonSocial;
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
        'RazonSocial_id'
    ];

    protected $guarded = ['id'];

    public function RazonSocial(){
        return $this->belongsTo(RazonSocial::class);
    }
}