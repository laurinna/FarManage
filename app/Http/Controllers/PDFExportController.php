<?php

namespace App\Http\Controllers;
use App\Animal;
Use App\AnimalType;
Use App\AnimalBreed;
Use App\Farmer;
use App\County;
use DB;
use PDF;

use Illuminate\Http\Request;

class PDFExportController extends Controller
{
    public function typeAscPDF() {

        $order = 'asc';
        $animals = Animal::join('animal_types', 'animals.typeID', '=', 'animal_types.id')->orderBy('animal_types.type', $order)->get();
        $pdf = PDF::loadView('animals.pdf', compact('animals'));
        
        return $pdf->download('animal.pdf');
    }

    public function typeDescPDF() {

        $order = 'desc';
        $animals = Animal::join('animal_types', 'animals.typeID', '=', 'animal_types.id')->orderBy('animal_types.type', $order)->get();
        $pdf = PDF::loadView('animals.pdf', compact('animals'));
        
        return $pdf->download('animal.pdf');
    }

    public function breedAscPDF() {

        $order = 'asc';
        $animals = Animal::join('animal_breeds', 'animals.breedID', '=', 'animal_breeds.id')->orderBy('animal_breeds.breedName', $order)->get();
        $pdf = PDF::loadView('animals.pdf', compact('animals'));
        
        return $pdf->download('animal.pdf');
    }

    public function breedDescPDF() {

        $order = 'desc';
        $animals = Animal::join('animal_breeds', 'animals.breedID', '=', 'animal_breeds.id')->orderBy('animal_breeds.breedName', $order)->get();
        $pdf = PDF::loadView('animals.pdf', compact('animals'));
        
        return $pdf->download('animal.pdf');
    }

    public function fnameAscPDF() {

        $farmers = Farmer::orderBy('firstName', 'ASC')->get();
        $pdf = PDF::loadView('farmers.pdf', compact('farmers'));
        
        return $pdf->download('farmer.pdf');
    }

    public function fnameDescPDF() {

        $farmers = Farmer::orderBy('firstName', 'DESC')->get();
        $pdf = PDF::loadView('farmers.pdf', compact('farmers'));
        
        return $pdf->download('farmer.pdf');
    }

    public function mnameAscPDF() {

        $farmers = Farmer::orderBy('middleName', 'ASC')->get();
        $pdf = PDF::loadView('farmers.pdf', compact('farmers'));
        
        return $pdf->download('farmer.pdf');
    }

    public function mnameDescPDF() {

        $farmers = Farmer::orderBy('middleName', 'DESC')->get();
        $pdf = PDF::loadView('farmers.pdf', compact('farmers'));
        
        return $pdf->download('farmer.pdf');
    }

    public function lnameAscPDF() {

        $farmers = Farmer::orderBy('lastName', 'ASC')->get();
        $pdf = PDF::loadView('farmers.pdf', compact('farmers'));
        
        return $pdf->download('farmer.pdf');
    }

    public function lnameDescPDF() {

        $farmers = Farmer::orderBy('lastName', 'DESC')->get();
        $pdf = PDF::loadView('farmers.pdf', compact('farmers'));
        
        return $pdf->download('farmer.pdf');
    }

    public function countyAscPDF() {

        $order = 'asc';
        $farmers = Farmer::join('counties', 'farmers.countyID', '=', 'counties.id')->orderBy('counties.countyName', $order)->get();
        $pdf = PDF::loadView('farmers.pdf', compact('farmers'));
        
        return $pdf->download('farmer.pdf');
    }

    public function countyDescPDF() {

        $order = 'desc';
        $farmers = Farmer::join('counties', 'farmers.countyID', '=', 'counties.id')->orderBy('counties.countyName', $order)->get();
        $pdf = PDF::loadView('farmers.pdf', compact('farmers'));
        
        return $pdf->download('farmer.pdf');
    }
}
