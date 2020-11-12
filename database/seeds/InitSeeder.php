<?php

use App\Model\Alert;
use App\Model\Data;
use App\Model\Status;
use Illuminate\Database\Seeder;

class InitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alerts = config('machine.alerts');
        $datas = config('machine.datas');
        $status = config('machine.status');

        foreach($alerts as $key => $description) {
            Alert::create([
                'key' => $key,
                'description' => $description
            ]);
        }

        foreach($datas as $key => $description) {
            Data::create([
                'key' => $key,
                'description' => $description
            ]);
        }

        foreach($status as $key => $description) {
            Status::create([
                'key' => $key,
                'description' => $description
            ]);
        }
    }
}
