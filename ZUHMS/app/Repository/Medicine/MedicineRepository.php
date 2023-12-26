<?php
namespace App\Repository\Medicine;

use App\Interfaces\Medicine\MedicineRepositoryInterface;
use App\Models\Medicine;
use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MedicineRepository implements MedicineRepositoryInterface
{
    use UploadTrait;

    public function index()
    {
        $medicines = Medicine::all();
        return view('Dashboard.Medicine.index', compact('medicines'));
    }


     // create Medicine
    public function create()
    {
        $medicines = Medicine::all();
        return view('Dashboard.Medicine.add', compact('medicines'));
    }
     // store Medicine
    public function store($request)
    {
        DB::beginTransaction();

        try {

            $medicine = new Medicine();
            $medicine->name = $request->name;
            $medicine->active_ingredient = $request->active_ingredient;
            $medicine->price = $request->price;
            $medicine->amount = $request->amount;
            $medicine->save();
            

            DB::commit();
            session()->flash('add');
            return redirect()->route('medicines.index');

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

     // update Medicine
    public function update($request, $id)
    {
        DB::beginTransaction();

        try {

            $medicine = Medicine::findorfail($id);
            $medicine->name = $request->name;
            $medicine->price = $request->price;
            $medicine->amount = $request->amount;
            $medicine->active_ingredient = $request->active_ingredient;
            $medicine->save();

            DB::commit();
            session()->flash('edit');
            return redirect()->route('medicines.index');

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    

   // destroy Medicine
    public function destroy($id)
    {
        Medicine::findOrFail($id)->delete();
        session()->flash('delete');
        return redirect()->route('medicines.index');
    }

     // edit Medicine
    public function edit($id)
    {
        $medicine = Medicine::findorfail($id);
        return view('Dashboard.Medicine.edit',compact('medicine'));
    }


}
