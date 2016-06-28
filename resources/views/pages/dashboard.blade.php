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
    <div id="traffic" class="tab-pane fade" style="width: 900px; height: 300px;">
      <h3>Traffic</h3>
      <p>The below chart shows the no of visits calculated in months of present year.</p>
      <!--Traffic Graph shows the traffic -->
      <canvas id="myChart" width="400" height="300"></canvas>
      <br>
      <br>
      <br>
      <br>

    </div>
    <div id="support" class="tab-pane fade">
      <h3><span class="label label-success">Support</span></h3>
      <p>Get support here. Fill and submit the form below and we will contact you in a while.</p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.js"></script>
<script>
var ctx = document.getElementById("myChart");
var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [
            {
                label: "Visits",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [65, 59, 80, 81, 56, 55, 40, 30, 50, 30, 70, 100],
            }
        ]
    },
    options:{
        responsive: true
    }
});

</script>
@endsection
<!-- This php below will get the data from database and will be converted into json for chart. -->
<?php
// query data
# $result = mysql_query(...);

// format data structure
# $data = array();
# $i = 0;
# while($row = mysql_fetch_array($result)) {
#     $i += 1;
#     array_push($data, array($i) + $row);
# }

// convert to JavaScript
?>
<!--var raw_data = <?php #echo json_encode($data) ?>;

// visualize
var data = google.visualization.arrayToDataTable(raw_data);
-->
