<?php

namespace App\Http\Controllers;
use App\Farmer;
use App\County;
use DB;
use PDF;
use Input;

use http\Env\Response;

use App\Exports\CountyAscExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $farmers = Farmer::all();
        return view('home',compact('farmers'));
    }

    public function searchFarmer(Request $request)
    { 
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('farmers')
                ->where('firstName', 'LIKE', "%{$query}%")
                ->orWhere('middleName', 'LIKE', "%{$query}%")
                ->orWhere('lastName', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
                $output .= '
                <li><a href="#">'.$row->firstName.' '.$row->middleName.' '.$row->lastName.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
            }
    }

    public function countyAscExport()
    {
        return Excel::download(new CountyAscExport, 'farmers.xlsx');
    }

    
}
