@extends('layouts.admin.master')
@section('title')
Administration
@endsection
@section('content')
<div class="middle row center-block">
<div class="panel panel-primary col-md-5"  >
    <h4 class="panel-heading text-center">
        Permissions
    </h4>
    <div class="panel-body">
        <h4><a href="{{Route('permission.create')}}" class="btn btn-primary btn-block">Create new Permission</a></h4>


        <h4 class="btn btn-info btn-block" disabled>Current Administrators</h4>
        <?php
        if (!empty($permissions)) {
            ?>
            @foreach($permissions as $permission)
            <h5><a href='permission/{{$permission->id}}' class="alert-link">{{$permission->permission_name }}</a></h5>
            @endforeach
                <?php
        } else {
            ?>  
            No permission has been created, use the button above to create one  
            <?php
        }
        ?>
         
    </div>
</div>
    
    
</div>
</div>
@endsection