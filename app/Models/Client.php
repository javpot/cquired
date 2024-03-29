<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bio',
        'picture',
        'banner',
        'location',
        'status',
        'email',
        'password',
        'domain',
		'saved',
    ];

    protected $casts = [
        'saved' => 'json',
    ];
}
