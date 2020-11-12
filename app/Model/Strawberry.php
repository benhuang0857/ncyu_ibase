<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Strawberry extends Model
{
    protected $table = "strawberry";
    protected $fillable = ['humidity', 'temperature', 'sunshine', 'conductance', 'acid', 'environment'];
}
