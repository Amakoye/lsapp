@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-default mt-2">Go back</a>
<div class="card mt-3">
    <div class="card-body">
        <h3>{{$post->title}}</h3>
        <div>
            {{$post->body}}
            <hr>
        </div>
        <small>Written on {{$post->created_at}}</small>
    </div>

</div>
@endsection