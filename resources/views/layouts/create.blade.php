@extends('layouts.master')

@section('title')
    Create Post!
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10 col-offset-1">
            <h1>Create Post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store']) !!}
                {{Form::label('title','Title:')}}
                {{Form::text('title',null,array('class'=>'form-control'))}}
                {{Form::label('body','Post Body:')}}
                {{Form::textarea('body',null,array('class'=>'form-control'))}}
            {{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top: 20px;'))}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection