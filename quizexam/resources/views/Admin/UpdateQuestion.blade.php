@extends('Admin/layout')
<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
        @section('main')
        <div class="align-items-center" style="margin-left:350px">
        	<div class="card w-50">
        		<div class="card-header">Update Question</div>
            @foreach($data as $i)
        		<div class="card-body">

               <form class="form" method="POST" action="{{route('updatequestion',$i->QUEID)}}">
               	@csrf
                <input type="hidden" name="examid" value="{{$i->EXAMID}}">
                <input type="hidden" name="questionid" value="{{$i->QUEID}}">
                <div class="form-group">
                  <label>Question</label>
                  <!--<input type="text" name="Question" class="form-control" autocomplete="off" value="{{ $i->Que}}">-->
                  <textarea class="form-control" id="Question" name="Question">{{$i->Que}}</textarea>
                  <span class="text-danger">
                       @error('Question')
                        {{$message}}
                       @enderror
                     </span>
                </div>
               	<div class="form-group">
                  <label>Option A</label>
                 <!-- <input type="text" name="OptionA" class="form-control" autocomplete="off" value="{{ $i->optionA }}">-->
                 <textarea class="form-control" id="OptionA" name="OptionA">{{$i->optionA}}</textarea>
                  <span class="text-danger">
                       @error('OptionA')
                        {{$message}}
                       @enderror
                     </span>
                </div>
                
                <div class="form-group">
                  <label>Option B</label>
                 <!-- <input type="text" name="OptionA" class="form-control" autocomplete="off" value="{{ $i->optionB }}">-->
                  <textarea class="form-control" id="OptionB" name="OptionB">{{$i->optionB}}</textarea>
                  <span class="text-danger">
                       @error('OptionB')
                        {{$message}}
                       @enderror
                     </span>
                </div>


                <div class="form-group">
                  <label>Option C</label>
                <!--  <input type="text" name="OptionA" class="form-control" autocomplete="off" value="{{ $i->OptionC }}">-->
                 <textarea class="form-control" id="OptionC" name="OptionC">{{$i->optionC}}</textarea>
                  <span class="text-danger">
                       @error('OptionC')
                        {{$message}}
                       @enderror
                     </span>
                </div>

                <div class="form-group">
                  <label>Option D</label>
                <!--  <input type="text" name="OptionA" class="form-control" autocomplete="off" value="{{ $i->OptionC }}">-->
                 <textarea class="form-control" id="OptionD" name="OptionD">{{$i->optionD}}</textarea>
                  <span class="text-danger">
                       @error('OptionD')
                        {{$message}}
                       @enderror
                     </span>
                </div>

                <div class="form-group">
                  <label>Correct</label>
                <!--  <input type="text" name="OptionA" class="form-control" autocomplete="off" value="{{ $i->OptionC }}">-->
                 <textarea class="form-control" id="Correct" name="Correct">{{$i->Correct}}</textarea>
                  <span class="text-danger">
                       @error('Correct')
                        {{$message}}
                       @enderror
                     </span>
                </div>
               	<div class="form-group">
               		<!--<input type="Submit" name="Cancle" value="Cancle" class="btn btn-danger">-->
               		<button class="btn btn-danger"><a href="questionlist/{{$i->EXAMID}}" style="color: white;text-decoration: none">Cancle</a></button>
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

