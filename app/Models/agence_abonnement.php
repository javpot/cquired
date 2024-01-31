<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agence_abonnement extends Model
{
    use HasFactory;

    protected $fillable = [
        'agence_id',
        'abonnement_id'
    ];

    public function agence() {
        return $this->belongsTo(Agence::class);
    }

    public function abonnement() {
        return $this->belongsTo(Abonnement::class);
    }
}

