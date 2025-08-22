@extends('layouts.default')

@section('header')
<h1>Header Contact</h1>
@include('sidemenu')
@endsection

@section('main')
    <h1>Contact</h1>
     <!-- <a href="{{ url("/test") }}">Go to test page</a> -->
     <a href="{{ route('testpage') }}">Contact Us</a>
@endsection

@section('footer')
<h2>Footer Contact</h2>
@endsection