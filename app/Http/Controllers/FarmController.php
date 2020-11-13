<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Farm;

class FarmController extends Controller
{
    public function post(Request $req)
    {      
        $farm = Farm::create($req->all());

        return response()->json($farm, 200);
    }

    public function getOne()
    {
        $farm = Farm::orderBy('created_at', 'desc')->first();
        return response()->json($farm, 200);
    }
}
