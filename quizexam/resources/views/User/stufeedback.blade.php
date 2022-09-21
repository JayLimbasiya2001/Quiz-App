@extends('User/userlayout')
<html>
<head>
	</head>
	<body>
		@section('usermain')
		<div class="align-items-center" style="margin-left:350px">
        	<div class="card w-50">
        		<div class="card-header">Give Your Feedback</div>
        		<div class="card-body">
               <form class="form" method="POST" action="/sendfeedback">
               	@csrf
               	<div class="form-group">
               		<label>Feedback</label>
               		<textarea type="text" class="form-control" name="feedback"></textarea>
                     
               	</div>
               	<div class="form-group">
               		<!--<input type="Submit" name="Cancle" value="Cancle" class="btn btn-danger">-->
               		<button class="btn btn-danger"><a href="/examlist" style="color: white;text-decoration: none">Cancle</a></button>
               		<input type="Submit" name="Submit" value="Send" class="btn btn-success">
               	</div>
               </form>
        	</div>
        	</div>
        </div>
		@endsection
	</body>
</html>