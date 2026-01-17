<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Museo extends Model
{
    protected $table = 'musei';
    protected $fillable = ["id", "name", "country", "year", "info", "user_id", "img"];
    public function user(){
        return $this->belongsTo(User::class);
    }

}
