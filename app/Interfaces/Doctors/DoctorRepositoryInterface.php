<?php
namespace App\Interfaces\Doctors;


interface DoctorRepositoryInterface
{

    // Get All Doctors
    public function index();


    // Store New Doctor
    public function store($request);

    // Update exist Doctor
    public function update($request);

    // Delete exist Doctor
    public function destroy($request);

}
