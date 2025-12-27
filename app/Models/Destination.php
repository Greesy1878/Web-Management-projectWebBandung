<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'title',
        'content',
        'service',
        'map',
        'image',
        'lokasi',
        'imageberita',
        'imagedestination',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'destination_id', 'id');
    }
}
