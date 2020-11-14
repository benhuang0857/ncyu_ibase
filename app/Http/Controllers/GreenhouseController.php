<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Greenhouse;

class GreenhouseController extends Controller
{
    public function post(Request $req)
    {      
        $greenhouse = Greenhouse::create($req->all());

        return response()->json($greenhouse, 200);
    }

    public function getOne()
    {
        $greenhouse = Greenhouse::orderBy('created_at', 'desc')->first();
        return response()->json($greenhouse, 200);
    }
}
