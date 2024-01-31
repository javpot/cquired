<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client_publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'publication_id'
    ];

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function publication() {
        return $this->belongsTo(Publication::class);
    }
}
