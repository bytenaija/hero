@extends('layouts.admin.master')    
@section('title')
    <title>Contact Us</title>
@endsection

@section('content')
    <div class="col-md-6">
        <h3>Please send us a message using the form below and we will get back to you as soon as possible</h3>
            {!! Form::model('Contact',['url' => 'contact']) !!}
            @include('errors.formerrors')
                <div class="form-group">
                    {!! Form::label('name', 'Name');!!}
                    {!! Form::text('name', null, ['class' => 'form-control']); !!}
                </div>
               <div class="form-group">
                    {!! Form::label('email', 'Email');!!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
            
            <div class="form-group">
                    {!! Form::label('phone_number', 'Phone Number');!!}
                    {!! Form::text('phone_number', null, ['class' => 'form-control']); !!}
                </div>
            
            <div class="form-group">
                    {!! Form::label('subject', 'Subject');!!}
                    {!! Form::text('subject', null, ['class' => 'form-control']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('message', 'Message');!!}
                    {!! Form::textarea('message', null, ['class' => 'form-control']);!!}
                </div>

                

                <div class="form-group">

                    {!! Form::submit('Send', ['class'=>'btn btn-primary']);!!}
                </div>
                {!! Form::close() !!}
        </div>
@endsection