<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{


    public function manage()
    {
        $tests = Test::all(); // Retrieve all tests from the database

        return view('Dashboard\Tests\tests', ['tests' => $tests]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Test::create($request->all());

        return redirect()->back()->with('success', 'Test added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $test = Test::findOrFail($id); // Find the test by its ID

        $test->update($request->all()); // Update the test with the submitted data

        return redirect()->back()->with('success', 'Test updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Test::destroy($id);

        return redirect()->back()->with('success', 'Test deleted successfully!');
    }
}
