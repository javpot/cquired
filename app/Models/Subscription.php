<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'price',
        'description',
        'icon',
        'client_limit',
        'message_limit',
    ];

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
}
