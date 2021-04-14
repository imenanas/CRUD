<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom_agence',
        'prix',
        'ref_voiture',
        'nom_locataire',

    ];
}
