<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libri';
    protected $fillable = ["id", "title", "author", "year", "info"];
}
