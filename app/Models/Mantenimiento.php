<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;
    protected $fillable = ['serial', 'nombre', 'observacion','fechamante','fechaprox'];

    public function Equipo(){
        return $this->hasOne(Equipo::class,'id','serial');
    }
}
