@extends('layouts.app')
@section('title',"| Welcome")
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Recent Posts</div>

                <div class="panel-body">
                    <h3>Post heading</h3>
                    <p>Here you will see the list of blog posts...</p>
                    <a href="#" class="btn btn-danger">Read this</a>
                </div>
                <hr>
                <div class="panel-body">
                    <h3>Post 2</h3>
                    <p>Like this...</p>
                    <a href="#" class="btn btn-danger">Read this</a>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection
