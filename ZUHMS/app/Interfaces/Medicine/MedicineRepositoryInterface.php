<?php

namespace App\Interfaces\Medicine;

interface MedicineRepositoryInterface
{
    // get Medicine
    public function index();

    // create Medicine
    public function create();

    // store Medicine
    public function store($request);

    // update Medicine
    public function update($request, $id);

    // destroy Medicine
    public function destroy($request);

    // destroy Medicine
    public function edit($id);

}
