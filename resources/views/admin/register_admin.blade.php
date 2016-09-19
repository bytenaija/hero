@extends('layouts.admin.master')
@section('title')
<title>Register new administrator</title>
@endsection()
@section('content')
<div class="section">
    <h1>
        This is Registering Admin: Hero App
    </h1>
    <div class="form">
        <div class="col-md-6">
            {!! Form::open(['url' => 'admin']) !!}
            @include('errors.formerrors')
               @include('partials.adminpartials', ['submitButton' => 'Add Admin']) 
        </div>

    </div>

</div>

@endsection
