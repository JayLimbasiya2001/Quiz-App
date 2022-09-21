@extends('Admin/layout')
<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
        @section('main')
        <div class="align-items-center" style="margin-left:350px">
        	<div class="card w-50">
        		<div class="card-header">Add Course</div>
        		<div class="card-body">
               <form class="form" method="POST" action="/addcourse">
               	@csrf
               	<div class="form-group">
               		<label>Course Name</label>
               		<input type="text" name="coursename" class="form-control" autocomplete="off">
                     <span class="text-danger">
                       @error('coursename')
                        {{$message}}
                       @enderror
                     </span>
               	</div>
               	<div class="form-group">
               		<!--<input type="Submit" name="Cancle" value="Cancle" class="btn btn-danger">-->
               		<button class="btn btn-danger"><a href="/coursecont" style="color: white;text-decoration: none">Cancle</a></button>
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