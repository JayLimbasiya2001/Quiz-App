<html>

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.min.css') }}">
  </head>
  <body onload="timeout()">
    <div class="container-fluid">
      <div class="text-dark col-md-8 mt-auto mt-5">
        <div style="margin-left:600px;margin-top: 20px;">
          <div class="font-weight-bold">
            Remaining Time 
          </div>
          <div id="timer">
             timeout
             <script type="text/javascript">
               var timeleft=20*60;

             </script>
          </div>
         
       <script type="text/javascript">
         function timeout()
         {
          //var hours=Math.floor(timeleft/3600);
          var minute=Math.floor(timeleft/60);
          var second=timeleft % 60;
           if(timeleft <=0)
           {
             //$('examform').submit();
             clearTimeout(tn);
             document.getElementById('exam').submit();
           }
           else
           {
          /*  if(hours<10)
            {
              hours="0"+hours;
            }*/
            if(minute<10)
            {
              minute="0"+minute;
            }
            if(second<10)
            {
              second="0"+second;
            }
           /*  if(hours<10)
            {
              hours="0"+hours;
            }*/
            document.getElementById('timer').innerHTML=minute+":"+second;
           }
           timeleft--;
           var tn= setTimeout(function(){timeout()},1000);
         }
       </script>
        </div>
          @foreach($data as $id)    
        <form method="POST" action="/ResultCalculate/{{$id['EXAMID']}}" id="exam" name="exam">
          @endforeach
          @csrf
          <div style="margin-top: 40px;margin-left: 200px;">

 @foreach($data as $que)
    
      <div style="background-color: lavender;" class="text-dark">
        <label style="margin-left: 10px;"><b>{{$que['Que']}}</b></label></br>
       </div>
      &nbsp;&nbsp; <input type="radio" name="data[{{$que['QUEID']}}]" value="{{$que['optionA']}}">&nbsp;{{$que['optionA']}}<br>
      &nbsp;&nbsp; <input type="radio" name="data[{{$que['QUEID']}}]" value="{{$que['optionB']}}">&nbsp;{{$que['optionB']}}<br>
      &nbsp;&nbsp; <input type="radio" name="data[{{$que['QUEID']}}]" value="{{$que['optionC']}}">&nbsp;{{$que['optionC']}}<br>
      &nbsp;&nbsp; <input type="radio" name="data[{{$que['QUEID']}}]" value="{{$que['optionD']}}">&nbsp;{{$que['optionD']}}<br><br>
      <input type="hidden" name="ans[{{$que['QUEID']}}]" value="{{$que['Correct']}}">
      @endforeach
      <input type="submit" name="btnsubmit" value="Submit Exam" style="margin-left:250px;width: 130px;"
     class=" text-dark btn btn-success">
    </form>
  </div>
    </div>
    </div>
     <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
  </body>
</html>