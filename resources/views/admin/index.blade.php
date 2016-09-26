@extends('layouts.admin.master')
@section('title')
Administration
@endsection
@section('content')
<div class="middle row center-block">
<div class="panel panel-primary col-md-5"  >
    <h4 class="panel-heading text-center">
        Administration Users
    </h4>
    <div class="panel-body">
        <h4><a href="{{Route('admin.register')}}" class="btn btn-primary btn-block">Create new Admin</a></h4>


        <h4 class="btn btn-info btn-block" disabled>Current Administrators</h4>
        <?php
        if (empty($admins)) {
            ?>
            @foreach($admins as $admin)
            <h5><a href='{{$admin->id}}' class="alert-link">{{$admin->Firstname }}, {{$admin->Lastname}}</a></h5>
            @endforeach
                <?php
        } else {
            ?>  
            No admin has been created, use the button above to create one  
            <?php
        }
        ?>
         
    </div>
</div>
    
    <div class="panel panel-primary col-md-5"  >
    <h4 class="panel-heading text-center">
        Clients
    </h4>
    <div class="panel-body">
        <h4><a href="{{Route('admin.register')}}" class="btn btn-primary btn-block">Create new Admin</a></h4>


        <h4 class="btn btn-info btn-block" disabled>Current Clients</h4>
        <br>
        <?php
        if (empty($admins)) {
            ?>
            @foreach($admins as $admin)
            <h5><a href='{{$admin->id}}' class="alert-link">{{$admin->Firstname }}, {{$admin->Lastname}}</a></h5>
            @endforeach
                <?php
        } else {
            ?>  
            Hero currently do not have any client. What in heaven are the marketing guys doing. The need a kick in the behind.  
            <?php
        }
        ?>
         
    </div>
</div>
</div>
@endsection