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
        <div id="myposts" class="panel-collapse collapse in">
          <div class="panel-body">
              <h3>{}</h3>
              <p>Here you will see the list of blog posts you created...</p>
              <a href="#" class="btn btn-warning">Read this</a>
          </div>
          <div class="panel-body">
              <h3>My Post 2</h3>
              <p>My second post</p>
              <a href="#" class="btn btn-warning">Read this</a>
          </div>
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
