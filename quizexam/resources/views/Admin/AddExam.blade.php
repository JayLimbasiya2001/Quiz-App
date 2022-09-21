@extends('Admin/layout')
<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
        @section('main')
        <div class="align-items-center" style="margin-left:350px">
        	<div class="card w-50">
        		<div class="card-header">Add Exam</div>
        		<div class="card-body">
               <form class="form" method="POST" action="/addexamdata">
               	@csrf
               	<div class="form-group">
               		<label>EXAM ID</label>
               		<input type="text" name="examid" class="form-control" autocomplete="off">
                 <span class="text-danger">
                       @error('examid')
                        {{$message}}
                       @enderror
                     </span>
               	</div>
                <div class="form-group">
                  <label>Course ID</label>
                  <select name="courseid">
                    @foreach($course as $e)
                    <option value="{{$e['COURSEID']}}">{{$e['COURSENAME']}}</option>
                     @endforeach
                      <span class="text-danger">
                       @error('courseid')
                        {{$message}}
                       @enderror
                     </span>
                  </select>
                 
                </div>
                <div class="form-group">
                  <label>TITLE</label>
                  <input type="text" name="examtitle" class="form-control" autocomplete="off">
                   <span class="text-danger">
                       @error('examtitle')
                        {{$message}}
                       @enderror
                     </span>
                </div>
                <div class="form-group">
                  <label>DESCRIPTION</label>
                  <!--<input type="text" name="examdesc" class="form-control" autocomplete="off">-->
                  <textarea name="examdesc" class="form-control"></textarea>
                   <span class="text-danger">
                       @error('examdesc')
                        {{$message}}
                       @enderror
                     </span>
                </div>
                <div class="form-group">
                  <label>DATE</label>
                  <input type="date" name="examdate" class="form-control" autocomplete="off">
                   <span class="text-danger">
                       @error('examdate')
                        {{$message}}
                       @enderror
                     </span>
                </div>
               	<div class="form-group">
               		<!--<input type="Submit" name="Cancle" value="Cancle" class="btn btn-danger">-->
               		<button class="btn btn-danger"><a href="/listexam" style="color: white;text-decoration: none">Cancle</a></button>
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