<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public function univerzum()
    {
        return $this->hasMany(Univerzum::class, 'id');
    }
}