@extends('User/userlayout')
<html>
<head>
	</head>
	<body>

	 <div class="container-fluid">
        @section('usermain')
         <div class="container-fluid">
                     <div class="row">         
               <div class="col-xl-10 col-md-8 mb-4 mt-3 ml-5">
                    <div class="card">
                        <!--<div class="card-header text-dark"><b>Course List</b></div>-->
                    <div class="card">
                     
                        <table class="table border-0">
                            <tr class="text-dark">
                  		        <th>Exam Id</th>
                  		        <th>Total Mark</th>
                  		        <th>Obtain Mark</th>
                           </tr>
                            @foreach($result as $res)
                        
                           <tr>
                               <td>{{$res['EXAMID']}}</td>
                               <td>{{$res['TOTAL']}}</td>
                               <td>{{$res['OBTAIN']}}</td>
                           </tr>
                          
                           @endforeach
                        </table>
                    </div>
                  </div>
                </div>
            </div>
        @endsection
    </div>	
	</body>
</html>