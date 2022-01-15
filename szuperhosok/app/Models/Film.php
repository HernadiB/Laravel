<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Univerzum;

class Film extends Model
{
    use HasFactory;

    public function univerzum()
    {
        return $this->belongsTo(Univerzum::class, 'id');
    }
}