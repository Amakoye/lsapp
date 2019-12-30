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
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        <hr>
        @if (!Auth::guest())
            @if (Auth::user()->id == $post->user_id)
            <div class="d-flex">
                <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit post</a>
        
                {!!Form::open(['action'=>['PostsController@destroy',$post->id], 'method'=>'POST', 'class'=>'pull-right ml-5'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
            </div>   
            @endif
            
        @endif
    </div>

</div>
@endsection