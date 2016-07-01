@extends('layouts.app')
@section('title','| Invite')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Invite Your Friends</h3>
            <hr>
            {!! Form::open(array('method' => 'post','action' => 'PageController@sendmail')) !!}
            {{ Form::label('email','Mail ID:')}}
            {{ Form::text('email',null,array('class'=> 'form-control'))}}
            {{ Form::submit('Send Invitation',array('class'=>'btn btn-info','style' =>'margin-top:20px;'))}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
