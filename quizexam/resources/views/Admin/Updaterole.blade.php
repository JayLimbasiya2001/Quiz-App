@extends('Admin/layout')
<html>
<head>
    </head>
 <body>
    <div class="container-fluid">
        @section('main')
        <div class="align-items-center" style="margin-left:350px">
        	<div class="card w-50">
        		<div class="card-header">Update Role</div>
            @foreach($data as $i)
        		<div class="card-body">
               <form class="form" method="POST" action="{{route('update',$i->RoleId)}}">
               	@csrf
               	<div class="form-group">
               		<label>RoleName</label>
               		<input type="text" name="rolename" class="form-control" autocomplete="off" value="{{ $i->RoleName }}">
               	</div>
               	<div class="form-group">
               		<!--<input type="Submit" name="Cancle" value="Cancle" class="btn btn-danger">-->
               		<button class="btn btn-danger"><a href="/managerole" style="color: white;text-decoration: none">Cancle</a></button>
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

