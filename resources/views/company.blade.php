@extends('layouts.default')

@section('header')
<h1>Header Company</h1>
@include('sidemenu')
@endsection

@section('main')
    <h1>Company</h1>
     <!-- <a href="{{ url("/test") }}">Go to test page</a> -->
     <a href="{{ route('testpage') }}">Contact Us</a>
@endsection

@section('footer')
<h2>Footer Company</h2>
@endsection