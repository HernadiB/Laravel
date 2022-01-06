<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Univerzum extends Model
{
    public function filmek()
    {
        return $this->belongsTo(Film::class, 'univerzum_id');
    }
}