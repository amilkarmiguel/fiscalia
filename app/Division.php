<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable = [
        'sigla' ,
        'nombre',
        'municipio',
        'zona',
        'calle',
        'oficina',
    ];
}
