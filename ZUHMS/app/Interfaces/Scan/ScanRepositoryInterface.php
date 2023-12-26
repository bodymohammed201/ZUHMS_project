<?php

namespace App\Interfaces\Scan;

interface ScanRepositoryInterface
{
    
    public function index();

    
    public function create();

    
    public function store($request);

    
    public function update($request, $id);

    
    public function destroy($request);

    
    public function edit($id);

}
