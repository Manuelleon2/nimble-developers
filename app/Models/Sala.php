<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'user_id',
        'img',
        'img2',
        'img3',
        'img4',
    ];

    //relacion Uno a Muchos (inversa)

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
