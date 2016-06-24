@extends('layouts.app')
@section('title',"| Dashboard")
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-btn fa-tachometer" aria-hidden="true"></i>Dashboard - {{ Auth::user()->name }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
