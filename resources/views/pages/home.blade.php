@extends('layouts.app')
@section('title',"| Home")
@section('content')
<div class="container">
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#myposts">
                My Posts</a>
        </div>
        @foreach($posts as $post)
        <div id="myposts" class="panel-collapse collapse in">
          <div class="panel-body">
              <h3>{{$post->title}}</h3>
              <a href="posts/{{$post->id}}" class="btn btn-warning">Read this</a>
          </div>
          <hr>
      @endforeach
        </div>
      </div>
    </div>
<!--Create New Post Form-->

            <a href="{{ url('/posts/create') }}">New Post&nbsp;</a><span class="glyphicon glyphicon-plus"></span>

        </div>
      </div>
    </div>

</div>
@endsection
