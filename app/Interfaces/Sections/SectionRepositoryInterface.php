<?php
namespace App\Interfaces\Sections;


interface SectionRepositoryInterface
{

    // Get All Sections
    public function index();


    // Store New Section
    public function store($request);

    // Update exist Section
    public function update($request);

    // Delete exist Section
    public function destroy($request);

}
