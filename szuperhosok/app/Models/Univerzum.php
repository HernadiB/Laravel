<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Univerzum extends Model
{
    use HasFactory;

    public function filmek()
    {
        return $this->hasMany(Univerzum::class, 'id');
    }
}