@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="container-fluid">
                            <div class="col-md-3 pull-left">
                                <h5><b>Animals</b></h5>
                            </div>

                            <div class="col-md-3 ">
                                <div class="dropdown">
                                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sort Animals
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ route('typeAscending') }}">Sort by Type in ascending order</a>
                                        <a class="dropdown-item" href="{{ route('typeDescending') }}">Sort by Type in descending order</a>
                                        <a class="dropdown-item" href="{{ route('breedAscending') }}">Sort by Breed in asscending order</a>
                                        <a class="dropdown-item" href="{{ route('breedDescending') }}">Sort by Breed in descending order</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 ">
                                <div class="dropdown">
                                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Export Data
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="">Excel</a>
                                        <a class="dropdown-item" href="{{ route('typeAscPDF') }}">Pdf</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 pull-right">
                                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                            </div>   
                        </div>                
                    </div>

                    <div class="card-body">
                    
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Breed</th>
                                    <th scope="col">Date of Birth</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php 
                                    $row_id =1;
                                @endphp

                                @foreach($animals as $animal)
                                <tr> 
                                    <th scope="row">{{$row_id++ }}</th>
                                    <td>{{$animal->animal_type->type}} </td>
                                    <td>{{$animal->animal_breed->breedName}}</td>
                                    <td>{{$animal->dateOfBirth}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection