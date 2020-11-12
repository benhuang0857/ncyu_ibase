<?php

namespace App\Http\Controllers\TEA;

use App\Http\Controllers\Controller;
use App\Model\Status;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function post(Request $request) {
        $content = $request->has('status')?$request->get('status'):$request->getContent();

        foreach(explode(',', $content) as $key => $value) {
            if(is_numeric($value)) {
                $status = Status::updateOrCreate(['key' => $key], ['value' => $value]);
            }
        }
    }

    public function getStatus() {
        $status = Status::whereIn('key', [9, 10, 11, 12, 13, 14, 15, 25, 26, 27, 28, 29, 30])->get();

        $status->transform(function($item){
            return ['S'.$item->key => 'status_'.$item->value];
        });

        return response()->json($status);
    }

    public function getTemp() {
        $client = new Client();
        $response = $client->get('http://opendata.cwb.gov.tw/api/v1/rest/datastore/F-D0047-057?Authorization=CWB-7889FB0E-63F2-4B01-9E25-0C59A145F53E&elementName=T,RH');
        $body = $response->getBody();
        return $body;
    }
}
