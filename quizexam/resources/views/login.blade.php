
<html>
<head>
    <meta charset="utf-8">
    <meta   name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--   <link rel="stylesheet" type="text/css" href="./css/maincss.css">-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<div class="container col-md-3 mt-5">
    <div class="card bg-dark">
        <div class="card-title text-center mt-3">
            <h3 class="text-light">Login</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="/loginusers">
    @csrf
    <div class="form-group">
       
        <input type="email" name="email" placeholder="Email" class="form-control" autocomplete="off">
        <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
        </span>
    </div>
    <div class="form-group">
            <input type="Password" name="Password" placeholder="Password" class="form-control">
            <span class="text-danger">
            @error('Password')
            {{$message}}
            @enderror
        </span>
    </div>
    <div class="form-group">
       
         <input type="submit" name="submit" value="Login" class="form-control btn-primary">
       
        

    </div>
</form>
 <span class="text-danger"> @if(session('invalid'))
         {{ session('invalid') }}
         @endif</span>
         
 <div class="text-center">
  
 </div>
        </div>


    </div>
</div>


</body>
</html>