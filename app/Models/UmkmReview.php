<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UmkmReview extends Model
{
    protected $fillable = [
        'name', 'email', 'rating', 'comment', 'media_path', 'umkmdestination_id'
    ];
}
