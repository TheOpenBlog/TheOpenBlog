@extends('layouts.app')
@section('title',"| Home")
@section('content')
<div class="container">
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#myposts">
                @if($query) Search Results for {{$query}}@endif</a>
        </div>
        <div id="myposts" class="panel-collapse collapse in">
        @if($users)
        @foreach($users as $user)
          <div class="panel-body">
              <h3>{{$user->name}}</h3>
              <p>{{$user->email}}</p>
              <a href="#" class="btn btn-success">Follow</a>
          </div>
           @endforeach
          @endif
        </div>
      </div>
    </div>
        </div>
      </div>
    </div>

</div>
@endsection
