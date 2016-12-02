@extends('layouts.app')
@section('title','| New Post')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>{{$post->title}}</h3>
            <p>{{$post->body}}</p>
            <form action="/like/{{$post->id}}" method="POST">
                <input type ="hidden" name="_token" value="{{csrf_token()}}"/>
                <button type="submit" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-heart" aria-hidden="true"
                @if($post->liked())
                style="color:red;"
                @endif
                ></span>
                </button>
                <span class="label label-success">{{$post->likeCount}} Likes</span>

            </form>
        </div>
        @if($post->user->id != Auth::user()->id)
        <form action="/flag/{{$post->id}}" method="POST">
            <input type ="hidden" name="_token" value="{{csrf_token()}}"/>
            <input
             @if($flg)
            class="btn btn-danger" type ="submit" value="Flagged"
        @else
            class="btn btn-warning" type ="submit" value="Report Post"
        @endif/>
        </form>

    @endif
    <br>
    @if(Auth::user()->role > 0 )
    <form action="/remove/{{$post->id}}" method="POST">
        <input type ="hidden" name="_token" value="{{csrf_token()}}"/>
        <input class="btn btn-warning" type ="submit" value="Remove"/>
    </form>

    @endif
    </div>

@endsection
