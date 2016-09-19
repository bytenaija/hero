@extends('layouts.admin.master')
@section('content')
<div class="section">
    <h3>
        Editing Admin: {{ $admin->Firstname }} {{ $admin->Lastname }}
    </h3>
    <div class="form">
        <div class="col-md-6">
            
            
            {!! Form::model($admin, ['method'=>'PATCH', 'action'=>['AdminController@update', $admin->id]]) !!}
            @include('errors.formerrors')
               @include('partials.adminpartials', ['submitButton' => 'Edit Admin']) 
        </div>

    </div>

</div>

@endsection