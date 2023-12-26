<?php

namespace App\Http\Controllers;


use App\Models\Soft;
use App\Models\Patient;
use App\Models\Doctor;

use Illuminate\Http\Request;

class SoftController extends Controller
{
    public function index()
    {
        $Patient =Patient::onlyTrashed()->get();
        return view('Dashboard.Patients.soft',compact('Patient'));
    }


    public function create()
    {
        $doctor =Doctor::onlyTrashed()->get();
        return view('Dashboard.Doctors.soft',compact('doctor'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        Doctor::withTrashed()->find($id)->restore();

        return redirect()->back();
    }


    public function edit($id)
    {
        Patient::withTrashed()->find($id)->restore();

      return redirect()->back();
    }


    public function update($id)
    
    {
        Doctor::withTrashed()->find($id)->forceDelete();

      return redirect()->back();
    }


    public function destroy($id)
{
    
      Patient::withTrashed()->find($id)->forceDelete();

      return redirect()->back();
}

}
