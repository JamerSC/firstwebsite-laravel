@extends('layouts.default')

@section('header')
<h1>Header Section</h1>
@include('sidemenu')
@endsection

@section('main')
    <h1>Home</h1>
     <!-- <a href="{{ url("/test") }}">Go to test page</a> -->
     <a href="{{ route('testpage') }}">Go to test page</a>
     <br><br>
     <form action="{{ route('formsubmitted') }}" method="post">
     <!-- <form action="{{ url('/formsubmitted') }}" method="post"> -->
        @csrf
        <label for="fullname">Full name:</label>
        <input type="text" name="fullname" id="fullname" placeholder="Enter full name" required>
        <br><br>
        <label for="email">E-mail:</label>
        <input type="text" name="email" id="email" placeholder="Enter email" required>
        <br><br>
        <button type="submit">Submit</button>
     </form>    
@endsection

@section('footer')
<h2>Footer Section</h2>
@endsection