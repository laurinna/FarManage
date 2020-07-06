<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3 style="center-align"><b>Animals</b></h3>                    
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
                             
  </body>
</html>