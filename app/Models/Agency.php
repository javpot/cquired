<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subscription;

class Agency extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'bio',
        'email',
        'pwd',
        'category',
        'location',
        'picture',
        'banner',
        'domain',
        'abonnement_id'
    ];

    public function Subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
