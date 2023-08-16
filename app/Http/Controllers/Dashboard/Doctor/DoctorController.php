<?php

namespace App\Http\Controllers\Dashboard\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Interfaces\Doctors\DoctorRepositoryInterface;

class DoctorController extends Controller
{

    private $doctorRepository;

    public function __construct(DoctorRepositoryInterface $doctorRepository)
    {
        $this->doctorRepository = $doctorRepository;
    }


    // Display all doctors

    public function index()
    {
       return $this->doctorRepository->index();
    }

    public function create()
    {
       return $this->doctorRepository->create();
    }

    //store new doctor
    public function store(Request $request)
    {
        return $this->doctorRepository->store($request);
    }


    //edit exist doctor
    public function update(Request $request)
    {
        return $this->doctorRepository->update($request);
    }

    //remove exist doctor
    public function destroy(Request $request)
    {
       return $this->doctorRepository->destroy($request);
    }
}
