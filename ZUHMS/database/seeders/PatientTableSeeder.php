<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PatientTableSeeder extends Seeder
{

    public function run()
    {
        $Patients = new Patient();
        $Patients->email = 'patient@gmail.com';
        $Patients->password = Hash::make('12345678');
        $Patients->Date_Birth = '1988-12-01';
        $Patients->Phone = '123456789';
        $Patients->Gender = 1;
        $Patients->Blood_Group = 'A+';
        $Patients->status = '1';
        $Patients->save();

        //insert trans
        $Patients->name = 'Ali Samir';
        $Patients->Address = 'Cairo';
        $Patients->save();
    }
}
