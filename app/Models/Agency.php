<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bio',
        'email',
        'pwd',
        'category',
        'location',
        'picture',
        'banner',
        'domain',
		'saved',
    ];

        protected $casts = [
        'saved' => 'json',
    ];

}
