<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Museo extends Model
{
    protected $table = 'musei';
    protected $fillable = ["id", "name", "country", "year", "info"];

}
