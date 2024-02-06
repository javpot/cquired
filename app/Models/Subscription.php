<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'description',
        'icon',
        'status',
        'client_limit',
        'message_limit',
    ];
}
