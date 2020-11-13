<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    protected $table = "farm";
    protected $fillable = ['humidity', 'temperature', 'water_level', 'flow'];
}
