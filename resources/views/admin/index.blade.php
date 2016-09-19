@extends('layouts.admin.master')

@section('content')

  
     
    <div class="panel-primary col-md-3"  >
        <h4 class="panel-heading ">
            Administration Users
        </h4>
        <div class="panel-body">
        <h4><a href="create" class="a">Create new Admin</a></h4>
        <h4>Current Administrators</h4>
        
       @foreach($admins as $admin)
       <h5><a href='{{$admin->id}}' class="alert-link">{{$admin->Firstname }}, {{$admin->Lastname}}</a></h5>
    
    @endforeach 
        </div>
    </div>
    
  
@stop