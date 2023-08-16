<?php

namespace App\Http\Controllers\Dashboard\Section;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\Sections\SectionRepositoryInterface;

class SectionController extends Controller
{

    private $sectionRepository;

    public function __construct(SectionRepositoryInterface $sectionRepository)
    {
        $this->sectionRepository = $sectionRepository;
    }


    // Display all sections

    public function index()
    {
       return $this->sectionRepository->index();
    }

    //store new section
    public function store(Request $request)
    {
        return $this->sectionRepository->store($request);
    }


    //edit exist section
    public function update(Request $request)
    {
        return $this->sectionRepository->update($request);
    }

    //remove exist section
    public function destroy(Request $request)
    {
       return $this->sectionRepository->destroy($request);
    }
}
