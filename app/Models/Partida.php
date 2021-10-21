<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'modulo_id',
        'programador_id',
        'error_id',
        'ganador_id'
    ];

    //relacion Uno a Muchos (inversa)

    public function modulo()
    {
        return $this->belongsTo('App\Models\Modulo');
    }

    //relacion Uno a Muchos (inversa)

    public function programador()
    {
        return $this->belongsTo('App\Models\Programador');
    }


    //relacion Uno a Muchos (inversa)

    public function error()
    {
        return $this->belongsTo('App\Models\Error');
    }

    //relacion Uno a Muchos (inversa)

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
