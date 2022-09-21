@extends('Admin/layout')
<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
        @section('main')
        <div class="align-items-center" style="margin-left:350px">
          <div class="card w-50">
            <div class="card-header">Add Question</div>
            <div class="card-body">
              @foreach($data as $id)
               <form class="form" method="POST" action="/addquedata">
                @csrf
               
                 <div class="form-group">
                  <label>EXAM ID</label>
                  <input type="text" name="examid" class="form-control" autocomplete="off" value="{{$id['EXAMID']}}">

                </div>
            
                <div class="form-group">
                  <label>Question</label>
                  <!--<input type="text" name="question" class="form-control" autocomplete="off">-->
                  <textarea name="question" class="form-control" autocomplete="off"></textarea>
                </div>
                 <div class="form-group">
                  <label>Option A</label>
                 <!-- <input type="text" name="optionA" class="form-control" autocomplete="off">-->
                  <textarea name="optionA" class="form-control" autocomplete="off"></textarea>
                </div>
                 <div class="form-group">
                  <label>Option B</label>
                  <!--<input type="text" name="optionB" class="form-control" autocomplete="off">-->
                  <textarea name="optionB" class="form-control" autocomplete="off"></textarea>
                </div>
                 <div class="form-group">
                  <label>Option C</label>
                  <!--<input type="text" name="optionC" class="form-control" autocomplete="off">-->
                  <textarea name="optionC" class="form-control" autocomplete="off"></textarea>
                </div>
                 <div class="form-group">
                  <label>Option D</label>
                  <!--<input type="text" name="optionD" class="form-control" autocomplete="off">-->
                  <textarea name="optionD" class="form-control" autocomplete="off"></textarea>
                </div>
                 <div class="form-group">
                  <label>Correct Answer</label>
                  <!--<input type="text" name="correct" class="form-control" autocomplete="off">-->
                  <textarea name="correct" class="form-control" autocomplete="off"></textarea>
                </div>
                <div class="form-group">
                  <!--<input type="Submit" name="Cancle" value="Cancle" class="btn btn-danger">-->
                  <button class="btn btn-danger"><a href="/questionslist/{{$id->EXAMID}}" style="color: white;text-decoration: none">Cancle</a></button>
                  <input type="Submit" name="Submit" value="Add" class="btn btn-success">
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