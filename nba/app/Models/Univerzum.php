<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Film;

class Univerzum extends Model
{
    protected $table = "univerzum";

    public function filmek()
    {
        return $this->hasMany(Film::class, 'univerzum_id');
    }
}