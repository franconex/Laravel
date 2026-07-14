<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursal';

    protected $primaryKey = 'idSucursal';

    public $timestamps = false;

    protected $fillable = [
        'nombre', 'direccion', 'telefono', 'horarioAtencion', 'estado',
    ];

    public function usuarios()
    {
        return $this->hasMany(User::class, 'idSucursal');
    }
}
