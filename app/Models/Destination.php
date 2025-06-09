<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    public function reviews()
    {
        return $this->hasMany(Review::class, 'destination_id', 'id');
    }
}