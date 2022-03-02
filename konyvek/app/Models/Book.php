<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $primaryKey = "isbn";
    protected $keyType = "string";
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        "isbn",
        "title",
        "title_original",
        "author",
        "episode",
        "series",
        "pages",
        "publisher",
        "translator",
        "category"
    ];
}
