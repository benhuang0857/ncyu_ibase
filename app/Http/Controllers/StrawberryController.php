<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Strawberry;
use Carbon\Carbon;
use DateTimeInterface;
use DB;

class StrawberryController extends Controller
{

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function post(Request $req)
    {      
        $strawberry = Strawberry::create($req->all());

        return response()->json($strawberry, 200);
    }

    public function getTemp()
    {
        $strawberry = Strawberry::orderBy('created_at', 'desc')->first();
        return response()->json($strawberry, 200);
    }

    public function getBerryPH()
    {
        $strawberry = Strawberry::orderBy('created_at', 'desc')->take(12)->get();
        return response()->json($strawberry, 200);
    }

    public function getSunshine()
    {
        $now = Carbon::now();
        $start = $now->copy()->startOfDay();

        $records = collect();
        for($start;$start<$now->copy()->endOfDay();$start->addHour()){
            $record = Strawberry::whereBetween('created_at',[$start->copy()->subHour(), $start])->first();
            if(!is_null($record))
            {
                $records->push($record);
            }
        }
        return response()->json($records);
    }
}
