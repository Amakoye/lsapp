@extends('layouts.app')
@section('content')
       <div class="jumbotron text-center mt-3">
         <h1>{{$title}}</h1>
         <p class="">This is Laravel Application from a Laravel series by Traversy</p>
         <a href="/login" class="btn btn-info">Login</a><a href="/register" class="btn btn-success ml-2">Register</a>
        </div>  
@endsection
