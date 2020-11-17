<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Strawberry;
use Carbon\Carbon;
use DB;

class StrawberryController extends Controller
{
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
        /*
        $strawberry = Strawberry::where('created_at', '>', DB::raw('NOW() - INTERVAL 24 HOUR'))->get();
        return response()->json($strawberry, 200);
        */
        $strawberry_24 = DB::table('strawberry')
            ->whereTime('created_at','<', '00:00:00')
            ->first();
        $strawberry_22 = DB::table('strawberry')
            ->whereTime('created_at','<', '22:00:00')
            ->first();
        $strawberry_20 = DB::table('strawberry')
            ->whereTime('created_at','<', '20:00:00')
            ->first();
        $strawberry_18 = DB::table('strawberry')
            ->whereTime('created_at','<', '18:00:00')
            ->first();
        $strawberry_16 = DB::table('strawberry')
            ->whereTime('created_at','<', '16:00:00')
            ->first();
        $strawberry_14 = DB::table('strawberry')
            ->whereTime('created_at','<', '14:00:00')
            ->first();
        $strawberry_12 = DB::table('strawberry')
            ->whereTime('created_at','<', '12:00:00')
            ->first();
        $strawberry_10 = DB::table('strawberry')
            ->whereTime('created_at','<', '10:00:00')
            ->first();
        $strawberry_08 = DB::table('strawberry')
            ->whereTime('created_at','<', '08:00:00')
            ->first();
        $strawberry_06 = DB::table('strawberry')
            ->whereTime('created_at','<', '06:00:00')
            ->first();
        $strawberry_04 = DB::table('strawberry')
            ->whereTime('created_at','<', '04:00:00')
            ->first();
        $strawberry_16 = DB::table('strawberry')
            ->whereTime('created_at','<', '02:00:00')
            ->first();
        $strawberry = [
            $strawberry_24, $strawberry_22, $strawberry_20, $strawberry_18, 
            $strawberry_16, $strawberry_14, $strawberry_12, $strawberry_10, 
            $strawberry_08, $strawberry_06, $strawberry_04, $strawberry_02,
        ];
        return response()->json($strawberry, 200);
    }
}
