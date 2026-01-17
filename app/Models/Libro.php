<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libri';
    protected $fillable = ["id", "title", "author", "year", "info", "user_id", "img"];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
