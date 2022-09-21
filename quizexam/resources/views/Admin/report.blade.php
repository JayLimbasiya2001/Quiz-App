@extends('Admin/layout')
<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
        @section('main')
         <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                       
                        
                    </div>
                     <div class="row">         
               <div class="col-xl-10 col-md-9 mb-4 mt-3 ml-5">
                    <div class="card">
                        <!--<div class="card-header text-dark"><b>Course List</b></div>-->
                    <div class="card">
                     
                        <table class="table border-0">
                            <tr class="text-dark">
                                <th>Course Id</th>
                               <th>Course Name</th>
                               <th colspan="1" class="text-center">Status</th>
                           </tr>
                            @foreach($result as $res)
                        
                           <tr>
                            <td>{{$res['COURSEID']}}</td>
                            <td>{{$res['COURSENAME']}}</td>
                            
                            <td><button class="btn btn-primary"><a href="/examslist/{{$res['COURSEID']}}" style="text-decoration: none;color: white;">View Result</a></button></td>
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