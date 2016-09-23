@extends('layouts.admin.master')
@section('title')
<title>View Contact Requests </title>
@endsection
@section('content')

    <div class="panel-primary col-md-7"  >
        
           <h4 class="panel-heading">{{$contact->subject}}</h4>
       
        <div class="panel-body">
        {{$contact->message}}
        <p>
        {{$contact->name}}
        <br/>   {{$contact->email}}
    <br/> {{$contact->phone_number}}
        </p>
    </div>
        
        <div class="btn btn-link"><a href="{{url('contact/view')}}">Back</a></div>
        
        @endsection