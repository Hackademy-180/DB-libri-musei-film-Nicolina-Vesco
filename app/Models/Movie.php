<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ["id", "title", "director", "year", "info", "user_id", "img"];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
