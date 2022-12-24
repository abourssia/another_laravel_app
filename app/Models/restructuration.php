<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restructuration extends Model
{
    use HasFactory;
    protected $table='restructuration';
    protected $fillable =[
            'code_labo',
            'intitule_labo',
            'etab',
            'dir_labo',
            'pvCL',
            'pvCSF',
            'CDetat	',
            'etat',
            'changement',

    ];


}