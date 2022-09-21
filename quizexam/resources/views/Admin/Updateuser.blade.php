@extends('Admin/layout')
<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
        @section('main')
        <div class="align-items-center" style="margin-left:350px">
        	<div class="card w-50">
        		<div class="card-header">Update Course</div>
            @foreach($data as $i)
        		<div class="card-body">
               <form class="form" method="POST" action="{{route('updateuser',$i->USERID)}}">
               	@csrf
                

                <div class="form-group">
                  <label>UserName</label>
                  <input type="text" name="UserName" class="form-control" autocomplete="off" value="{{ $i->USERNAME }}">
                </div>
                <div class="form-group">
                  <label>RoleId</label>
                  <input type="text" name="RoleId" class="form-control" autocomplete="off" value="{{ $i->RoleId }}">
                 
             
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <input type="text" name="Gender" class="form-control" autocomplete="off" value="{{ $i->GENDER }}">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="Email" class="form-control" autocomplete="off" value="{{ $i->EMAIL }}">
                </div>
                <div class="form-group">
                  <label>Contact</label>
                  <input type="text" name="Contact" class="form-control" autocomplete="off" value="{{ $i->CONTACT }}" >
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="Password" class="form-control" autocomplete="off"value="{{ $i->PASSWORD }}">
                </div>
            
               	<div class="form-group">
               		<!--<input type="Submit" name="Cancle" value="Cancle" class="btn btn-danger">-->
               		<button class="btn btn-danger"><a href="/displayuser" style="color: white;text-decoration: none">Cancle</a></button>
               		<input type="Submit" name="Submit" value="Update" class="btn btn-success">
               	</div>
               </form>
               @endforeach
        	</div>
        	</div>
        </div>
        @endsection
    </div>
    </body>
</html>

