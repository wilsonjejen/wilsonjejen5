<?php

namespace App;
use App\materia;
use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    protected $fillable = [

        'id',
        'nombre',
        'apellido',
        'equipo'
    ];

    public function rela_materia(){

    return $this->belongsToMany(materia::class);

    }
}
