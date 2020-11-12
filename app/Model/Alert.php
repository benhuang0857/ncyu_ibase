<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    protected $fillable = ['key', 'value', 'description', 'point'];
}
