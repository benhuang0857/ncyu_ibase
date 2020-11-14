<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Greenhouse extends Model
{
    protected $table = "greenhouse";
    protected $fillable = ['voltage', 'air_temperature', 'air_humidity', 'co2', 'sunshine', 'soil_temperature', 'soil_humidity', 'air_pressure'];
}
