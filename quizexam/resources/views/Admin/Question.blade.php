@extends('Admin/layout')
<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
        @section('main')
         <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manage Exam</h1>
                        @foreach($exam as $examid)
                        <a href="/setquestion/{{$examid['EXAMID']}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-user-plus fa-sm text-white-50">&nbsp;&nbsp;</i>Add Question</a>
                        @endforeach
                    </div>
                     <div class="row">         
               <div class="col-xl-11 col-md-9 mb-4 mt-3 ml-5">
                    <div class="card">
                        <!--<div class="card-header text-dark"><b>Course List</b></div>-->
                  



                       <form>
                        @csrf
                        @foreach($data as $que)
                        <table width="955px">
                           
                          <div style="background-color: lavender;" class="text-dark">
                            <tr style="background-color:lavender;">
                                <td width="780px">
                         <label style="margin-left: 10px;">{{$que['Que']}}</label>
                                </td>
                                <td>
                         <a href="/updateque/{{$que->QUEID}}" class="btn btn-success">Update</a>
                         
                         <a href="/deleteQue/{{$que->QUEID}}" class="btn btn-danger">Delete</a>
                     </td>
                            </tr>
                     </div> 
                     <tr>
                        <td>
                         &nbsp;&nbsp; <label style="margin-left: 10px;">{{$que['optionA']}}</label></br>
                         &nbsp;&nbsp; <label style="margin-left: 10px;">{{$que['optionB']}}</label></br>
                         &nbsp;&nbsp; <label style="margin-left: 10px;">{{$que['optionC']}}</label></br>
                         &nbsp;&nbsp; <label style="margin-left: 10px;">{{$que['optionD']}}</label></br>
                     </td>
                 </tr>
                     </table>
                        @endforeach
                       </form>   
                    
                  </div>
                </div>
            </div>
        @endsection
    </div>
    </body>
</html>