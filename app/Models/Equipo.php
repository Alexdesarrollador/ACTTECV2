<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable = ['serial', 'nombre', 'tipo','marca','modelo', 'procesador', 'ram', 'disco', 'so', 'ip', 'asignacion', 'empleadoid'];

    public function Empleado(){
        return $this->hasOne(Empleado::class,'id','empleadoid');
    }
}


 