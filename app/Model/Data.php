<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = ['key', 'value', 'description', 'point'];
}
