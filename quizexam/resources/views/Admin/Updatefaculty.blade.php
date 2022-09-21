@extends('Admin/layout')
<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
        @section('main')
        <div class="align-items-center" style="margin-left:350px">
        	<div class="card w-50">
        		<div class="card-header">Update Faculty</div>
            @foreach($data as $i)
        		<div class="card-body">
               <form class="form" method="POST" action="{{route('updatefaculty',$i->FacultyId)}}">
               	@csrf
                

                <div class="form-group">
                  <label>Name</label>

                  <input type="text" name="facultyname" class="form-control" autocomplete="off" value="{{ $i->Name }}">

                </div>
                <div class="form-group">
                  <label>Gender</label>
            
                 <input type=radio name="gender" value="Male" {{ $i->Gender == 'Male' ? 'checked' : ''}}>Male
                 <input type=radio name="gender" value="Female" {{ $i->Gender == 'Female' ? 'checked' : ''}}>Female             

                </div>              
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" autocomplete="off" value="{{ $i->Email }}">
                </div>
                <div class="form-group">
                  <label>Contact</label>
                  <input type="text" name="contact" class="form-control" autocomplete="off" value="{{ $i->Contact }}" >
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="password" class="form-control" autocomplete="off"value="{{ $i->Password }}">
                </div>
            
               	<div class="form-group">
               		<!--<input type="Submit" name="Cancle" value="Cancle" class="btn btn-danger">-->
               		<button class="btn btn-danger"><a href="/facultydisplay" style="color: white;text-decoration: none">Cancle</a></button>
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

