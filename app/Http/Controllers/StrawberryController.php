<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Strawberry;

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

    public function getSunshine()
    {
        $strawberry = Strawberry::orderBy('created_at', 'desc')->take(12)->get();
        return response()->json($strawberry, 200);
    }
}
