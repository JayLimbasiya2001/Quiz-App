@extends('User/userlayout')
<html>
<head>
	</head>
	<body>
	
		   <div class="container-fluid">

		   		@section('usermain')
		   		<h3>Ongoing Exam</h3>
		   		<div class="row">
                  @foreach($exam as $e)
		   			<div class="col-xl-3 col-md-6 mb-4">   
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="font-weight: 40;font-size: 15;">
                                               <a href="examque/{{$e->EXAMID}}" style="text-decoration: none;" class="text-dark">{{$e['TITLE']}}</a></div>
                                        
                                        </div>
                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                  @endforeach
		   		</div>
		   		@endsection

		   </div>
		
	</body>
</html>