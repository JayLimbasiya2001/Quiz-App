@extends('Admin/layout')
<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
        @section('main')
         <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manage User</h1>
                        <a href="/users" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-user-plus fa-sm text-white-50">&nbsp;&nbsp;</i>Add User</a>
                    </div>
                     <div class="row">         
               <div class="col-xl-12 col-md-8 mb-4 mt-3 ml-2">
                    <div class="card">
                        <!--<div class="card-header text-dark"><b>Course List</b></div>-->
                    <div class="card">
                     
                        <table class="table border-0">
                            <tr class="text-dark">
                                <th>UserId</th>
                               <th>UserName</th>
                               <th>RoleId</th>
                               <th>Gender</th>
                               <th>Email</th>
                               <th>Contact</th>
                               <th>Password</th>
                               <th colspan="2" class="text-center" width="200">Status</th>
                           </tr>
                            @foreach($result as $i)
                           <tr>
                            <td>{{$i['USERID']}}</td>
                            <td>{{$i['USERNAME']}}</td>
                            <td>{{$i['RoleId']}}</td>
                            <td>{{$i['GENDER']}}</td>
                            <td>{{$i['EMAIL']}}</td>
                            <td>{{$i['CONTACT']}}</td>
                            <td>{{$i['PASSWORD']}}</td>                           

                            <td width="100"><button class="btn btn-success"><a href='updateuser/{{$i->USERID}}' style="text-decoration: none;color: white">Update</a></button></td>
                            <td width="100"><button class="btn btn-danger"><a href='deleteuser/{{$i->USERID}}' style="text-decoration: none;color: white">Delete</a></button></td>
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