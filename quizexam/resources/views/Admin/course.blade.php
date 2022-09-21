@extends('Admin/layout')
<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
        @section('main')
         <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manage Course</h1>
                        <a href="/addcoursedata" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-user-plus fa-sm text-white-50">&nbsp;&nbsp;</i>Add Course</a>
                    </div>
                     <div class="row">         
               <div class="col-xl-10 col-md-8 mb-4 mt-3 ml-5">
                    <div class="card">
                        <!--<div class="card-header text-dark"><b>Course List</b></div>-->
                    <div class="card">
                     
                        <table class="table border-0">
                            <tr class="text-dark">
                            	<th>ID</th>
                               <th>Course Name</th>
                               <th colspan="2" class="text-center" width="200">Status</th>
                           </tr>
                            @foreach($result as $i)
                           <tr>
                           	<td>{{$i['COURSEID']}}</td>
                            <td>{{$i['COURSENAME']}}</td>

                            <td width="100"><button class="btn btn-success"><a href='updatecourse/{{$i->COURSEID}}' style="text-decoration: none;color: white">Update</a></button></td>
                            <td width="100"><button class="btn btn-danger"><a href='deletecourse/{{$i->COURSEID}}' style="text-decoration: none;color: white">Delete</a></button></td>
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