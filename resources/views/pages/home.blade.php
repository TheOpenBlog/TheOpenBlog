@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">My Posts</div>

                <div class="panel-body">
                    <h3>My Post 1</h3>
                    <p>Here you will see the list of blog posts you created...</p>
                    <a href="#" class="btn btn-warning">Read this</a>
                </div>
                <hr>
                <div class="panel-body">
                    <h3>My post 2</h3>
                    <p>Like this...</p>
                    <a href="#" class="btn btn-warning">Read this</a>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection
