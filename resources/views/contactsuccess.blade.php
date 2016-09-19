@extends('layouts.admin.master')    
@section('title')
    <title>Thank you</title>
@endsection

@section('content')
<div class="col-md-6">
    <h2 class="btn-primary">
        Thank you {{ $name }} for contacting us. A member of our team will get back to you as soon as possible.
    </h2>
</div>
@endsection