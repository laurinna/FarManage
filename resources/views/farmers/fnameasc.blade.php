@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="container-fluid">
                        <div class="col-md-3 pull-left">
                            <h5><b>Farmers</b></h5>
                        </div>

                        <div class="col-md-3 ">
                            <div class="dropdown">
                                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sort Farmers
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('fNameAscending') }}">Sort by First Name in ascending order</a>
                                    <a class="dropdown-item" href="{{ route('fNameDescending') }}">Sort by First Name descending order</a>
                                    <a class="dropdown-item" href="{{ route('mNameAscending') }}">Sort by Middle Name in asscending order</a>
                                    <a class="dropdown-item" href="{{ route('mNameDescending') }}">Sort by Middle Name in descending order</a>
                                    <a class="dropdown-item" href="{{ route('lNameAscending') }}">Sort by Last Name in ascending order</a>
                                    <a class="dropdown-item" href="{{ route('lNameDescending') }}">Sort by Last Name in descending order</a>
                                    <a class="dropdown-item" href="{{ route('countyAscending') }}">Sort by County in asscending order</a>
                                    <a class="dropdown-item" href="{{ route('countyDescending') }}">Sort by County in descending order</a>
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
                                        <a class="dropdown-item" href="">Pdf</a>
                                    </div>
                                </div>
                            </div>

                        <div class="col-md-3 pull-right">
                            <input class="form-control" name="farmer" id="farmer" type="text" placeholder="Search" aria-label="Search">
                            <div id="farmer_list"></div> 
                        </div>   
                    </div>                
                </div>

                <div class="card-body">
                   
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col"> First Name</th>
                                <th scope="col"> Last Name</th>
                                <th scope="col">County</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                                $row_id =1;
                            @endphp

                            @foreach($farmers as $farmer)
                            <tr>
                                <th scope="row">{{$row_id++ }}</th>
                                <td>{{$farmer->firstName}} </td>
                                <td>{{$farmer->lastName}} </td>
                                <td>{{$farmer->county->countyName}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){

 $('#farmer').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('searchFarmer') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#farmer_list').fadeIn();  
                    $('#farmer_list').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#farmer').val($(this).text());  
        $('#farmer_list').fadeOut();  
    });  

});
</script>
@endsection
