<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratoire extends Model
{
    use HasFactory;
    
    protected $table='laboratoires';
    protected $fillable =[
            'code_labo',
            'intitule_labo',
            'etab',
            'dir_labo',
            'email_dir',
            'num_dir',
            'gdomaine_labo',
            'domaine_labo',
            'acronyme',
            'created_by'

    ];}
