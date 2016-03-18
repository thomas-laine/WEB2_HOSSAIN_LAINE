<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = [
        'id',
        'title',
        'name',
        'adresse',
        'email',
        'tel',
        'ficheID',
        'typeProjet',
        'contexte',
        'demande',
        'objectifs',
        'contraintes'
    ];
}