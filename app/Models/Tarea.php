<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

    public function archivos()
    {
        return $this->hasMany(Archivos::class);
    }

    public function reportes()
    {
        return $this->belongsTo(Reportes::class);
    }

}
