@extends('Admin/layout')
<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
        @section('main')
        <div class="align-items-center" style="margin-left:350px">
        	<div class="card w-50">
        		<div class="card-header">Update Exam</div>
            @foreach($data as $i)
        		<div class="card-body">
               <form class="form" method="POST" action="{{route('updateexam',$i->EXAMID)}}">
               	@csrf
                <div class="form-group">
                  <label>Course Id</label>
                  <input type="text" name="courseid" class="form-control" autocomplete="off" value="{{ $i->COURSEID}}">
                  <span class="text-danger">
                       @error('courseid')
                        {{$message}}
                       @enderror
                     </span>
                </div>
               	<div class="form-group">
                  <label>Exam Title</label>
                  <input type="text" name="examtitle" class="form-control" autocomplete="off" value="{{ $i->TITLE }}">
                  <span class="text-danger">
                       @error('examtitle')
                        {{$message}}
                       @enderror
                     </span>
                </div>
                <div class="form-group">
                  <label>DESCPRICTION</label>
                 <!-- <input type="text" name="examdesc" class="form-control" autocomplete="off" value="{{ $i->DESC }}">-->
                 <textarea class="form-control" name="examdesc">{{$i->DESC}}</textarea>
                 <span class="text-danger">
                       @error('examdesc')
                        {{$message}}
                       @enderror
                     </span>
                </div>
                <div class="form-group">
                  <label>DATE</label>
                  <input type="date" name="examdate" class="form-control" autocomplete="off" value="{{ $i->DATE }}">
                  <span class="text-danger">
                       @error('examdate')
                        {{$message}}
                       @enderror
                     </span>
                </div>
               	<div class="form-group">
               		<!--<input type="Submit" name="Cancle" value="Cancle" class="btn btn-danger">-->
               		<button class="btn btn-danger"><a href="/listexam" style="color: white;text-decoration: none">Cancle</a></button>
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

