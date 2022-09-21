<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
         <div class="container-fluid">
                     <div class="row">         
               <div class="col-xl-10 col-md-8 mb-4 mt-3 ml-5">
                    <div class="card">
                        <!--<div class="card-header text-dark"><b>Course List</b></div>-->
                    <div class="card">
                        <table class="table" border="1">
                            <tr class="text-dark">
                                <th>ID</th>
                                <th>Name</th>
                            	<th>EXAM ID</th>
                                <th>TOTAL MARKS</th>
                                <th>OBTAIN MARKS</th>
                           </tr>
                            @foreach($result as $i) 
                            <tr>
                                <td>{{$i['UserId']}}</td>
                                <td>{{$i['Name']}}</td>
                                <td>{{$i['EXAMID']}}</td>
                                <td>{{$i['TOTAL']}}</td>
                                <td>{{$i['OBTAIN']}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                  </div>
                </div>
            </div>
        
    </div>
    </body>
</html>