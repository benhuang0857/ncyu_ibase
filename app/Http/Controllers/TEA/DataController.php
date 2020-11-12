<?php

namespace App\Http\Controllers\TEA;

use App\Http\Controllers\Controller;
use App\Model\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function post(Request $request) {
        $content = $request->has('data')?$request->get('data'):$request->getContent();

        foreach(explode(',', $content) as $key => $value) {
            if(is_numeric($value)) {
                $data = Data::updateOrCreate(['key' => $key], ['value' => $value]);
            }
        }
    }

    public function getData() {
        $datas = Data::all();

        $datas->transform(function($item){
            return ['D'.$item->key => $item->value];
        });

        return response()->json($datas);
    }

}
