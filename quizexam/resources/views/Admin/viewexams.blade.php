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
                            
                           
                    </div>
                   
                     <div class="row" id="DownloadResult">         
               <div class="col-xl-10 col-md-9 mb-4 mt-3 ml-5">
                    <div class="card">
                        <!--<div class="card-header text-dark"><b>Course List</b></div>-->
                    <div class="card">
                     
                        <table class="table border-0">
                            <tr class="text-dark">
                            	<th>Exam</th>
                               <th>Date</th>
                               <th>Status</th>
                           </tr>
                            @foreach($exam as $res)
                        
                           <tr>
                           	<td>{{$res['TITLE']}}</td>
                            <td>{{$res['DATE']}}</td>
                             <td><button class="btn btn-primary"><a href="/viewresult/{{$res['EXAMID']}}" style="text-decoration: none;color: white;">View Result</a></button></td>
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