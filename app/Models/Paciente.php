<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';

    protected $fillable = [
        'documento',
        'nombres',
        'apellidos',
        'telefono',
        'email',
        'fecha_nacimiento',
    ];
}
