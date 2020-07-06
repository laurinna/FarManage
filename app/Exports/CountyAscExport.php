<?php

namespace App\Exports;
use App\Farmer;
use App\County;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CountyAscExport implements FromView
{
    
    public function view() : View
    {
    
        $farmers = Farmer::orderBy('countyID', 'ASC')->get();
        return view('farmers.countyasc', compact('farmers'));
    }
}



