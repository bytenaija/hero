@extends('layouts.admin.master')
@section('title')
<title>Login</title>
@endsection

@section('content')
<div class="section">
    <h1>
        Please Enter you Email and Password
    </h1>
    <div class="form">
        <div class="col-md-6">
            {!! Form::open(['url' => 'auth/login']) !!}
            @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
                <div class="form-group">
                    {!! Form::label('email', 'Email');!!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password');!!}
                    {!! Form::password('password', ['class' => 'form-control']);!!}
                </div>
                <div class="form-group">
                    {!! Form::label('type', 'User Type');!!}
                    {!! Form::select('type', ['admin' => 'Admin', 'vendor' =>'Vendor', 'client' =>'Client'],['class' => 'form-control']);!!}
                </div>
               

                <div class="form-group">

                    {!! Form::submit('Register', ['class'=>'btn btn-primary']);!!}
                </div>
                {!! Form::close() !!}
        </div>

    </div>

</div>

@endsection
