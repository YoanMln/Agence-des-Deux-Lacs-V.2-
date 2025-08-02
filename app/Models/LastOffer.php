<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LastOffer extends Model
{
    protected $fillable = [
        'type',
        'location',
        'rooms',
        'surface',
        'price',
        'image',
        'title',
        'description'
    ];

    
}
