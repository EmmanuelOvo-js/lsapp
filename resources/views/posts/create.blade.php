@extends('layouts.app')

@section('content')
    <h1>Creat Post</h1>

    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST' ]) !!}
        <div class="formgroup">
           {{Form::label('title', 'Title')}} 
           {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}    
        </div>  

        &nbsp;
           
        
         <div class="formgroup">
           {{Form::label('body', 'Body')}} 
            {{Form::textarea('body', '', ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}} 
              &nbsp;
        </div> 
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        
    {!! Form::close() !!}


@endsection 