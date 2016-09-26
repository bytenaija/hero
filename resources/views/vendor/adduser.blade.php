@extends('layouts.vendor.master')
@section('title')
Vendor - Add User
@endsection
@section('content')
hello
<div class="middle row center-block">
    
        Vendor id is : {{$vendorid}}
        @if(!empty($vendorid))
        @endif
</div>

@endsection