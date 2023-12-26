<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Medicine\MedicineRepositoryInterface;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    private $Medicine;

    public function __construct(MedicineRepositoryInterface $Medicine)
    {
        $this->Medicine = $Medicine;
    }

    public function index()
    {
        return $this->Medicine->index();
    }

    
    public function create()
    {
        return $this->Medicine->create();
    }

    
    public function store(Request $request)
    {
        return $this->Medicine->store($request);
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        return $this->Medicine->edit($id);
    }

    
    public function update(Request $request, $id)
    {
        return $this->Medicine->update($request, $id);
    }

    
    public function destroy($request)
    {
        return $this->Medicine->destroy($request);
    }

}