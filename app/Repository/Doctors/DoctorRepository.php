<?php
namespace App\Repository\Doctors;



use App\Models\Doctor;
use App\Models\Section;
use App\Models\Appointment;
use App\Interfaces\Doctors\DoctorRepositoryInterface;

class DoctorRepository implements DoctorRepositoryInterface
{

    public function index()
    {
        //to return all Doctors in system
      $doctors = Doctor::all();
      return view('Dashboard.Doctors.index',compact('doctors'));
    }

    public function create()
    {
        $sections = Section::all();
        $appointments = Appointment::all();
        return view('Dashboard.Doctors.add',compact('sections','appointments'));
    }

    public function store($request)
    {
        Doctor::create([
            'name' => $request->input('name'),
        ]);

        session()->flash('add');
        return redirect()->route('doctors.index');
    }

    public function update($request)
    {
        $Doctor = Doctor::findOrFail($request->id);
        $Doctor->update([
            'name' => $request->input('name'),
        ]);
        session()->flash('edit');
        return redirect()->route('doctors.index');
    }

    public function destroy($request)
    {
        Doctor::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('doctors.index');
    }
}
