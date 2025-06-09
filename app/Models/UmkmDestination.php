<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UmkmDestination extends Model
{
    public function umkm_reviews()
    {
        return $this->hasMany(UmkmReview::class, 'umkmdestination_id', 'id');
    }
}