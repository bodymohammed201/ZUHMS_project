<?php
namespace App\Repository\Scan;

use App\Interfaces\Scan\ScanRepositoryInterface;
use App\Models\Scan;
use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ScanRepository implements ScanRepositoryInterface
{
    use UploadTrait;

    public function index()
    {
        $scans = Scan::all();
        return view('Dashboard.Ray.index', compact('scans'));
    }

    public function create()
    {
        return view('Dashboard.Ray.add');
    }

    public function store($request)
    {
        DB::beginTransaction();

        try {

            $scan = new Scan();
            $scan->name = $request->name;
            $scan->price = $request->price;
            $scan->save();

            DB::commit();
            session()->flash('add');
            return redirect()->route('scans.index');

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update($request, $id)
    {
        DB::beginTransaction();

        try {

            $scan = Scan::findorfail($id);
            $scan->name = $request->name;
            $scan->price = $request->price;;
            $scan->save();

            DB::commit();
            session()->flash('edit');
            return redirect()->route('scans.index');

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    

    public function destroy($id)
    {
        Scan::findOrFail($id)->delete();
        session()->flash('delete');
        return redirect()->route('scans.index');
    }

    public function edit($id)
    {
        $scan = Scan::findorfail($id);
        return view('Dashboard.Ray.edit',compact('scan'));
    }


}
