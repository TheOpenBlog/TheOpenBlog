@extends('layouts.app')
@section('title',"| Dashboard")
@section('content')

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
      <p>Tune your profile and settings here. Track your profile completion progress in the below bar.</p>
      <!--Profile Completion Progress bar -->
      <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    60%
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
      <p>Google visaulization charts are used to display charts.</p>
      <!--Traffic Graph shows the traffic -->
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div id="chart_div"></div>

    </div>
    <div id="support" class="tab-pane fade">
      <h3><span class="label label-success">Support</span></h3>
      <p>Get support here. Fill and submit the form below and we will contact you in a while.</p>
      <!--Traffic Graph shows the traffic -->
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-success">
                  <div class="panel-heading">How may we help you?</div>
                  <div class="panel-body">
                      <h3>Support</h3>
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
