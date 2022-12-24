<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;
    
    protected $table='experts';
    protected $fillable =[
            'name_expert',
            'code_expert',
            'mail_expert',
            'tel_expert',
            'etab_expert',
            'spec_expert',
            'grade_expert',
            'adressprof',
            'fax',
            'compteccp',
            'cleccp',
            'cbank',
            'agencebank'

    ];}
