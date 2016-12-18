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
                                <td><a href="dismiss/{{$post->id}}" class="label label-danger">Dismiss</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading"><i class="fa fa-btn fa-tachometer" aria-hidden="true"></i> Support</div>
                <div class="panel-body">
                        @foreach($sup as $s)
                        <ul class="media-list">
                          <li class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object" src="/tob.png" style="width:64px; height:64px;" alt="theopenblog">
                              </a>
                            </div>
                            <div class="media-body">
                               <a href="deleteSup/{{$s->id}}" class="close" aria-label="Close" ><span aria-hidden="true">&times;</span></a>
                              <h4 class="media-heading">#{{$s->id}} {{$s->subject}}</h4>
                              <h6>{{$s->message}}</h6>
                              <form method="POST" action="supportReply/{{$s->id}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <label>Reply:</label><br>
                                <textarea name="reply" style="width:100%; height:60px;"></textarea>
                                <input type="submit" class="btn btn-success" value="Reply">
                              </form>
                            </div>
                          </li>
                        </ul>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
