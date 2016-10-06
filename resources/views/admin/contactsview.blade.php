@extends('layouts.admin.master')
@section('title')
<title>View Contact Requests</title>
@endsection

@section('content')

  
     
    <div class="panel-primary col-md-7"  >
        <h4 class="panel-heading">
            Contact Requests
        </h4>
        
        <div class="panel-body">
            <ul>
       @foreach($contacts as $contact)
       <li>Subject: <a href="{{ action('ContactController@show', [$contact->id])}}" class="alert-link">{{$contact->subject }}</a><br> at: {{$contact->updated_at}}</h5>
       </li>
       
    @endforeach 
            </ul>
        </div>

        {{$contacts->links()}}
    </div>
    
  
@stop