<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\AnimalBreed;
use App\AnimalType;
use App\Farmer;
use DB;
use Auth;
use PDF;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animal_types = AnimalType::all();
        $animal_breeds = AnimalBreed::all();
        return view('animals.create', compact('animal_types', 'animal_breeds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'typeID' => 'bail|required|numeric',
            'breedID' => 'bail|required|numeric', 
            'dateOfBirth' => 'bail|required|date',
            'comments' => 'required|string',
 
         ]);
 
         
         $animal = new Animal;
         $animal->farmerID = \Auth::user()->id;
         $animal->typeID = $request->get('typeID');
         $animal->breedID = $request->get('breedID');
         $animal->dateOfBirth = $request->get('dateOfBirth');
         $animal->comments = $request->get('comments');
         $animal->createdBy = \Auth::user()->id; 
         
        $animal-> save();
        //return response()->json($animal); 
        return redirect('animal/index')->with('success', 'Animal has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function searchAnimal(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('animals')
        ->where('breedID', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="#">'.$row->breedID.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
    
}
