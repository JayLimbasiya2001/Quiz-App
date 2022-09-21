@extends('Admin/layout')
<html>
<head>
    </head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
 <body>
    <script type="text/javascript">
                        window.onload=function(){
                            document.getElementById("download").addEventListener("click",()=>{
                                const invoice=this.document.getElementById("DownloadResult");
                                console.log(invoice);
                                console.log(window);
                                html2pdf().from(invoice).save();
                            })
                        }
 </script>
    <div class="container-fluid">
        @section('main')
         <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        
                       
                        <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            
                            <i class="fas fa-download fa-sm text-white-50">&nbsp;&nbsp;</i>Download Result</a>-->
                            <button id="download" class="btn btn-primary" style="margin-left:900px">Download Result</button>
                           
                    </div>
                   
                     <div class="row" id="DownloadResult"> 
                        <div>
                     @foreach($exam as $title)
                        <b style="margin-left:400px">{{$title['TITLE']}}&nbsp;&nbsp;Online Exam</b>
                        @endforeach   
                        </div>     
               <div class="col-xl-10 col-md-9 mb-4 mt-3 ml-5">
                    <div class="card">
                        <!--<div class="card-header text-dark"><b>Course List</b></div>-->
                        
                    <div class="card">
                     
                        <table class="table border-0">
                            <tr class="text-dark">
                            	<th>User Id</th>
                               <th>Name</th>
                               <th>TOTAL MARK</th>
                               <th>OBTAIN MARK</th>
                               
                           </tr>
                            @foreach($data as $res)
                        
                           <tr>
                           	<td>{{$res['StuId']}}</td>
                            <td>{{$res['Name']}}</td>
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