<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'prix',
        'description',
        'icon',
        'client-limite',
        'message-limite',
        'agence_id'
    ];

    public function agence() {
        return $this->belongsTo(Agence::class);
    }
}
