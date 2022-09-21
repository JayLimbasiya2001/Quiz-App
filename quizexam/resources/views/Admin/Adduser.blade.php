@extends('Admin/layout')
<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
        @section('main')
        <div class="align-items-center" style="margin-left:350px">
        	<div class="card w-50">
        		<div class="card-header">Add User</div>
        		<div class="card-body">
               <form class="form" method="POST" action="/adduserview">
               	@csrf               
                <div class="form-group">
                  <label>UserName</label>
                  <input type="text" name="UserName" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>RoleId</label>
                <!--  <input type="text" name="RoleId" class="form-control" autocomplete="off">-->
                   <select name="RoleId" class="form-control">
                    @foreach($role as $e)
                    <option value="{{$e['RoleId']}}">{{$e['RoleName']}}</option>
                     @endforeach
                  </select>
             
                </div>
                <div class="form-group">
                  <label>Gender : </label>
                  Male<input type="radio" name="Gender"  value="Male">
                  &nbsp;&nbsp;Female<input type="radio" name=""Gender  value="female">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="Email" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>Contact</label>
                  <input type="text" name="Contact" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="Password" class="form-control" autocomplete="off">
                </div>
               	<div class="form-group">               
               		<button class="btn btn-danger"><a href="/displayuser" style="color: white;text-decoration: none">Cancle</a></button>
               		<input type="Submit" name="Submit" value="Add" class="btn btn-success">
               	</div>
               </form>
        	</div>
        	</div>
        </div>
        @endsection
    </div>
    </body>
</html>