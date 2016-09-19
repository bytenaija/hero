@extends('layouts.admin.master')

@section('content')

    <div class="admindisplay">
        
        {{$admin->Firstname}} {{$admin->Lastname}}
        <br/>   {{$admin->email}}
    <br/> {{$admin->phone_number}}
    
   
    <div class="form">
        
        <span class="fleft">
          <!--   {!! Form::model($admin, ['method'=>'get', 'action'=>['AdminController@edit', $admin->id]]) !!} -->
          <!--{!! Form::submit('Edit Admin', ['class'=>'btn btn-primary']);!!}-->
         <!-- {!! Form::close() !!}-->
         <a href="{{$admin->id}}/edit" class="btn btn-primary">Edit Admin   </a>
        </span>
        <span>
          {!! Form::model($admin, ['method'=>'DELETE', 'action'=>['AdminController@destroy', $admin->id]]) !!}
          {!! Form::submit('Delete Admin', ['class'=>'btn btn-danger']);!!}
         {!! Form::close() !!}
        </span>
    </div>
    </div>
@endsection