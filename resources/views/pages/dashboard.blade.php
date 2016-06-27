@extends('layouts.app')
@section('title',"| Dashboard")
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Top post </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
  <h2>Dashboard - {{ Auth::user()->name }}</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#profile">Profile</a></li>
    <li><a data-toggle="tab" href="#stats">Stats</a></li>
    <li><a data-toggle="tab" href="#traffic">Traffic</a></li>
    <li><a data-toggle="tab" href="#support">Support</a></li>
  </ul>

  <div class="tab-content">
    <div id="profile" class="tab-pane fade in active">
      <h3>Profile Settings</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <!--Traffic Graph shows the traffic -->
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-info">
                  <div class="panel-heading">Top page views</div>
                  <div class="panel-body">
                      <h3>My Post 1</h3>
                      <p>Here you will see the list of blog posts you created...</p>
                      <a href="#" class="btn btn-warning">Read this</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
    </div>
    <div id="stats" class="tab-pane fade">
      <h3>Stats</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <!--Traffic Graph shows the traffic -->
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-info">
                  <div class="panel-heading">Top page views</div>
                  <div class="panel-body">
                      <h3>My Post 1</h3>
                      <p>Here you will see the list of blog posts you created...</p>
                      <a href="#" class="btn btn-warning">Read this</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
    </div>
    <div id="traffic" class="tab-pane fade">
      <h3>Traffic</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      <!--Traffic Graph shows the traffic -->
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-info">
                  <div class="panel-heading">Top page views</div>
                  <div class="panel-body">
                      <h3>My Post 1</h3>
                      <p>Here you will see the list of blog posts you created...</p>
                      <a href="#" class="btn btn-warning">Read this</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
    </div>
    <div id="Support" class="tab-pane fade">
      <h3>Support</h3>
      <p>Get support here. </p>
      <!--Traffic Graph shows the traffic -->
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-info">
                  <div class="panel-heading">Top page views</div>
                  <div class="panel-body">
                      <h3>My Post 1</h3>
                      <p>Here you will see the list of blog posts you created...</p>
                      <a href="#" class="btn btn-warning">Read this</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
    </div>
  </div>
</div>
@endsection
