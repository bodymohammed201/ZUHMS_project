<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Scan\ScanRepositoryInterface;
use App\Models\Scan;
use Illuminate\Http\Request;

class ScanController extends Controller
{
    private $Scan;

    public function __construct(ScanRepositoryInterface $Scan)
    {
        $this->Scan = $Scan;
    }
    public function index()
    {
        return $this->Scan->index();
    }

    public function create()
    {
        return $this->Scan->create();
    }

    public function store(Request $request)
    {
        return $this->Scan->store($request);
    }

    public function show($id)
    {
        return $this->Scan->show($id);
    }

    public function edit($id)
    {
        return $this->Scan->edit($id);
    }

    public function update(Request $request, $id)
    {
        return $this->Scan->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->Scan->destroy($id);
    }
}
