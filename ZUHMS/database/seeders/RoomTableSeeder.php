<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Room::create([

        'room'=>'1',
        'patient_id'=>Patient::all()->random()->id,

       ]);
    }
}
