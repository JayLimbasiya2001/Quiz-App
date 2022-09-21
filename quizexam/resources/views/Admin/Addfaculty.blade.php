@extends('Admin/layout')
<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
        @section('main')
        <div class="align-items-center" style="margin-left:350px">
        	<div class="card w-50">
        		<div class="card-header">Add Faculty</div>
        		<div class="card-body">
               <form class="form" method="POST" action="/addfacultyview">
               	@csrf
               	<div class="form-group">
               		<label>Name</label>
               		<input type="text" name="facultyname" class="form-control" autocomplete="off">
                     <span class="text-danger">
                       @error('studentname')
                        {{$message}}
                       @enderror
                     </span>

                  <label>Gender</label>
                  &nbsp;&nbsp;<input type="radio" name="gender" value="Male" autocomplete="off">Male
                  &nbsp;&nbsp;<input type="radio" name="gender" value="Female" autocomplete="off">Female
                     <span class="text-danger">
                       @error('gender')
                        {{$message}}
                       @enderror
                     </span>
                     <br>                  

                     <label>Email</label>
                  <input type="text" name="email" class="form-control" autocomplete="off">
                     <span class="text-danger">
                       @error('email')
                        {{$message}}
                       @enderror
                     </span>                

                     <label>Contact</label>
                  <input type="text" name="contact" class="form-control" autocomplete="off">
                     <span class="text-danger">
                       @error('contact')
                        {{$message}}
                       @enderror
                     </span>

                     <label>Password</label>
                  <input type="text" name="password" class="form-control" autocomplete="off">
                     <span class="text-danger">
                       @error('password')
                        {{$message}}
                       @enderror
                     </span>

               	</div>
               	<div class="form-group">
               		<!--<input type="Submit" name="Cancle" value="Cancle" class="btn btn-danger">-->
               		<button class="btn btn-danger"><a href="/facultydisplay" style="color: white;text-decoration: none">Cancle</a></button>
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