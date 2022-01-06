<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function univerzum()
    {
        return $this->belongsTo(Film::class, 'univerzum_id');
    }
}