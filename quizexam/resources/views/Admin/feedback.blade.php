@extends('Admin/layout')
<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
        @section('main')
         <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manage Feedback</h1>
                       
                    </div>
                     <div class="row">         
               <div class="col-xl-10 col-md-9 mb-4 mt-3 ml-5">
                    <div class="card">
                        <!--<div class="card-header text-dark"><b>Course List</b></div>-->
                    <div class="card">
                     
                        <table class="table border-0">
                            <tr class="text-dark">
                                <th>StuId</th>
                               <th>Feedback</th>
                           </tr>
                            @foreach($result as $e)
                        
                           <tr>
                            <td>{{$e['StuId']}}</td>
                            <td>{{$e['Feedback_desc']}}</td>
                            
                           </tr>
                          
                           @endforeach
                        </table>
                    </div>
                  </div>
                </div>
            </div>
        @endsection
    </div>
    </body>
</html>