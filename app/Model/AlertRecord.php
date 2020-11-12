<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AlertRecord extends Model
{
    protected $fillable = ['alert_id', 'start_time', 'end_time'];
}
