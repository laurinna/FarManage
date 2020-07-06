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
                             
  </body>
</html>