<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'bio',
        'photo',
        'banner',
        'localisation',
        'statut',
        'email',
        'password',
        'domaine',
    ];
}
