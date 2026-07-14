<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';

    protected $primaryKey = 'idRol';

    public $timestamps = false;

    protected $fillable = [
        'nombreRol', 'descripcion', 'fechaCreacion',
    ];

    public function usuarios()
    {
        return $this->hasMany(User::class, 'idRol');
    }
}
