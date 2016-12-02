@extends('layouts.app')
@section('title',"| Welcome")
@section('content')

<div class="container">
    <div class="jumbotron" id="#logoimage">
        <center><h1>The Open Blog - <span class="label label-danger">PRIVATE BETA</span></h1><center>
        <p>The Open Blog is an opensource blogging platform made for the community by the community.
         Read the recent posts made by our members below or search a specific post or user using our
         custom search <a href="#">here</a>.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>
    <div class="row">
        <div class="col-sm-10 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Recent Posts</div>
                @foreach($posts as $post)
                <div class="panel-body">
                    <h3>{{$post->title}}</h3>
                    <p>By:<span class="label label-primary">{{$post->user->name}}</span></p>
                    <p>On:{{$post->created_at}}</p>
                    <a href="posts/{{$post->id}}" class="btn btn-danger">Read this</a>
                </div>
                <hr>
            @endforeach
            </div>
            {{ $posts->links() }}
        </div>
    </div>
</div>
<br>
<br>
<br>
@endsection
