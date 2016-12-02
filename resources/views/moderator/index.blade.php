@extends('layouts.app')
@section('title',"| Notifications")
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-btn fa-tachometer" aria-hidden="true"></i>Moderation Panel - Flagged Posts</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Post Title</th>
                                <th>Post User</th>
                                <th>Review</th>
                                <th>Dismiss</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->post->title}}</td>
                                <td>{{$post->post->user->name}}</td>
                                <td><a href="posts/{{$post->post_id}}" class="label label-success">Review</a></td>
                                <td><a href="posts/{{$post->post_id}}" class="label label-danger">Dismiss</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
