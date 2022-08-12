<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */
    protected $fillable = [
        'nom', 
        'prenom',
        'adresse',
        'numero_telephone',
        'personne_prevenir',
        'pathologie_principale',
        'diagnostique_associe',
        'stade_maladie',
        'projet_therapeutique',
        'resume',
    ];
}
