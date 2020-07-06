<?php

namespace App\Http\Controllers;
use App\Animal;
Use App\AnimalType;
Use App\Farmer;
use App\County;
use DB;

use Illuminate\Http\Request;

class SortController extends Controller
{
    public function typeAscending()
    {
        $order = 'asc';
        $animals = Animal::join('animal_types', 'animals.typeID', '=', 'animal_types.id')->orderBy('animal_types.type', $order)->get();
        //$animals = Animal::orderBy('type', 'ASC')->get();
        return view('animals.typeAsc', compact('animals'))->with('success', 'sorted by type in ascending order');
    }
    

    public function typeDescending()
    {
        
        $order = 'desc';
        $animals = Animal::join('animal_types', 'animals.typeID', '=', 'animal_types.id')->orderBy('animal_types.type', $order)->get();
        return view('animals.typeDesc', compact('animals'))->with('success', 'sorted by type in descending order');
    }

    public function breedAscending()
    {
        
        $order = 'asc';
        $animals = Animal::join('animal_breeds', 'animals.breedID', '=', 'animal_breeds.id')->orderBy('animal_breeds.breedName', $order)->get();
        return view('animals.breedAsc', compact('animals'));
    }

    public function breedDescending()
    {
        
        $order = 'desc';
        $animals = Animal::join('animal_breeds', 'animals.breedID', '=', 'animal_breeds.id')->orderBy('animal_breeds.breedName', $order)->get();
        return view('animals.breedDesc', compact('animals'));
    }

    public function fNameAscending()
    {
        
        $farmers = Farmer::orderBy('firstName', 'ASC')->get();
        return view('farmers.fnameasc', compact('farmers'))->with('success', 'sorted by type in ascending order');
    }

    public function fNameDescending()
    {
        
        $farmers = Farmer::orderBy('firstName', 'DESC')->get();
        return view('farmers.fnamedesc', compact('farmers'))->with('success', 'sorted by type in ascending order');
    }

    public function mNameAscending()
    {
        
        $farmers = Farmer::orderBy('middleName', 'ASC')->get();
        return view('farmers.mnameasc', compact('farmers'))->with('success', 'sorted by type in ascending order');
    }

    public function mNameDescending()
    {
        
        $farmers = Farmer::orderBy('middleName', 'DESC')->get();
        return view('farmers.mnamedesc', compact('farmers'))->with('success', 'sorted by type in ascending order');
    }

    public function lNameAscending()
    {
        
        $farmers = Farmer::orderBy('lastName', 'ASC')->get();
        return view('farmers.lnameasc', compact('farmers'))->with('success', 'sorted by type in ascending order');
    }

    public function lNameDescending()
    {
        
        $farmers = Farmer::orderBy('lName', 'DESC')->get();
        return view('farmers.fnamedesc', compact('farmers'))->with('success', 'sorted by type in ascending order');
    }

    public function countyAscending()
    {
        
        $farmers = Farmer::orderBy('countyID', 'ASC')->get();
        return view('farmers.countyasc', compact('farmers'))->with('success', 'sorted by type in ascending order');
    }

    public function countyDescending()
    {
        
        $farmers = Farmer::orderBy('countyID', 'DESC')->get();
        return view('farmers.countydesc', compact('farmers'))->with('success', 'sorted by type in ascending order');
    }

}

