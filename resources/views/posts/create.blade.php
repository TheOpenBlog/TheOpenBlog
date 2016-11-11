@extends('layouts.app')
@section('title','| New Post')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Create New Post</h3>
            <hr>
            {!! Form::open(array('route' => 'posts.store')) !!}
            {{ Form::label('title','Title:')}}
            {{ Form::text('title',null,array('class'=> 'form-control'))}}
            {{ Form::label('body','Post Body:')}}
            {{ Form::textarea('body',null,array('class'=> 'form-control'))}}
            {{ Form::submit('Publish Post',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}

            {!! Form::close() !!}
        </div>
    </div>
@endsection
