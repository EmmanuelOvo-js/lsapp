@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST' ]) !!}
        <div class="formgroup">
           {{Form::label('title', 'Title')}} 
           {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}    
        </div>  

        &nbsp;
         <div class="formgroup">
           {{Form::label('body', 'Body')}} 
            {{Form::textarea('body', $post->body, ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}} 
              &nbsp;
        </div> 
        {{Form::hidden('_method', 'PUT')}} 
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        
    {!! Form::close() !!}


@endsection  