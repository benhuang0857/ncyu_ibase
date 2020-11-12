<?php

namespace App\Http\Controllers\TEA;

use App\Http\Controllers\Controller;
use App\Model\Alert;
use App\Model\AlertRecord;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function post(Request $request) {
        $content = $request->has('alert')?$request->get('alert'):$request->getContent();

        foreach(explode(',', $content) as $key => $value) {
            if(is_numeric($value)) {
                $alert = Alert::updateOrCreate(['key' => $key], ['value' => $value]);
                if($value == 1){
                    $record = AlertRecord::where('alert_id', $alert->id)->whereNotNull('start_time')->whereNull('end_time')->get();
                    if($record->isEmpty()) {
                        AlertRecord::create(['alert_id' => $alert->id, 'start_time' => Carbon::now()]);
                    }
                } elseif ( $value == 0 ) {
                    $record = AlertRecord::where('alert_id', $alert->id)->whereNull('end_time')->get();
                    if($record->isNotEmpty()) {
                        $record->first()->update(['end_time' => Carbon::now()]);
                    }
                }
            }
        }
    }

    public function getAlert() {
        $alerts = Alert::where('value', 1)->get();

        if($alerts->isEmpty()) {
            return response()->json([]);
        }

        $alerts->transform(function($item){
            return [config('machine.alerts.'.$item->key)];
        });

        return response()->json($alerts);
    }
}
