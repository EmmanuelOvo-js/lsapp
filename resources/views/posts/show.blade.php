@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-primary">Go Back</a>
&nbsp;
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>

  <div class="row align-items-start">
    <div class="col">
      <a href="/posts/{{$post->id}} /edit" class="btn btn-primary">Edit</a>
    </div>
    <div class="col">
      {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}} 
        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
    </div>
    

@endsection 