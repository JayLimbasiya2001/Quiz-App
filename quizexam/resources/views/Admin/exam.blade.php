@extends('Admin/layout')
<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
        @section('main')
         <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manage Exam</h1>
                        <a href="/listexamcourse" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-user-plus fa-sm text-white-50">&nbsp;&nbsp;</i>Add EXAM</a>
                    </div>
                     <div class="row">         
               <div class="col-xl-10 col-md-9 mb-4 mt-3 ml-5">
                    <div class="card">
                        <!--<div class="card-header text-dark"><b>Course List</b></div>-->
                    <div class="card">
                     
                        <table class="table border-0">
                            <tr class="text-dark">
                            	<th>EXAMID</th>
                               <th>COURSEID</th>
                               <th>TITLE</th>
                               <th>DESCRIPTION</th>
                               <th>DATE</th>
                               <th colspan="3" class="text-center" width="300">Status</th>
                           </tr>
                            @foreach($exam as $e)
                        
                           <tr>
                           	<td>{{$e['EXAMID']}}</td>
                            <td>{{$e['COURSEID']}}</td>
                            <td>{{$e['TITLE']}}</td>
                            <td>{{$e['DESC']}}</td>
                            <td>{{$e['DATE']}}</td>

                            <td width="100"><button class="btn btn-primary"><a href='/questionslist/{{$e->EXAMID}}' style="text-decoration: none;color: white">Manage Question</a></button></td>
                            <td width="100"><button class="btn btn-success"><a href='updateexam/{{$e->EXAMID}}' style="text-decoration: none;color: white">Update</a></button></td>
                            <td width="100"><button class="btn btn-danger"><a href='deleteexam/{{$e->EXAMID}}' style="text-decoration: none;color: white">Delete</a></button></td>
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