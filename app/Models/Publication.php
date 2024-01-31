<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Publication extends Model
{
    use HasFactory;

        protected $fillable = [
        'titre',
        'description',
        'status',
        'client_id',
    ];

    public function client() {
        return $this->belongsTo(Client::class);
    }
}
