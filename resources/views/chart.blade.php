<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users Performance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Users Performance</h2>
   <div class="content-wrapper">
          <div class="row">           
            <div class="col-md-6 col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-account icon-lg text-success"></i>
                    <div class="ml-3">
                      <a href="#">
                      <p class="mb-0"></p>
                      <h6>Check Performance</h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">           
            <div class="col-md-6 col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-account icon-lg text-success"></i>
                    <div class="ml-3">
                      <a href="#">
                      <p class="mb-0"></p>
                      <h6><a href="{{url('home')}}">Go Back</a></h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                 
       <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Users Performance Chart</h4>
                     <select id="user_filter" class="float-right">
                    <option value="1" {{isset($_GET['userPerformance'])?$_GET['userPerformance']==1?'selected="selected"':'':''}}>All</option>
                    <option value="2" {{isset($_GET['userPerformance'])?$_GET['userPerformance']==2?'selected="selected"':'':''}}>this month</option>
                    <option value="1" {{isset($_GET['userPerformance'])?$_GET['userPerformance']==3?'selected="selected"':'':''}}>this year</option>
                     <option value="4" {{isset($_GET['userPerformance'])?$_GET['userPerformance']==4?'selected="selected"':'':''}}>Previous Month</option>
                  </select>
                 <div class="panel-body">
                   <canvas id="canvas_performance" height="280" width="600"></canvas>
               </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
     
  <!-- Plugin js for this page-->
<script src="{{asset('admin/node_modules/chart.js/dist/Chart.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>

  <script>
        let url_performance=JSON.parse('<?php echo $user_performance;?>');
        console.log("regis"+url_performance);

        var Years1 = new Array();
        var Labels1 = new Array();
        var Prices = new Array();
        $(document).ready(function(){
          //$.get(url, function(response){
            url_performance.forEach(function(data){
              console.log(data);
              Years1.push(data.month);
              Labels1.push(data.data);
            });
            var ctx = document.getElementById("canvas_performance").getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels:Years1,
                      datasets: [{
                          label: 'Users Performance Chart',
                          data: Labels1,
                          borderWidth: 1
                      }]
                  },
                  options: {
                      scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero:true
                              }
                          }]
                      }
                  }
              });
            
          //});
        });

//The indexOf() method returns the position of the first occurrence of a specified value in a string.
//This method returns -1 if the value to search for never occurs.

// The window.location.href property returns the URL of the current page.


$("#user_filter").on("change",function(e){
    let selectValue=$(this).val();
    var url = window.location.href.split('?')[0];
    //console.log(url.indexOf('?'));
   if (url.indexOf('?') > -1){
       url += '&userPerformance='+selectValue
      // console.log("first"+url);
    }else{
       url += '?userPerformance='+selectValue
             // console.log("second"+url);
    }
    window.location.href = url;
});
        </script>

</body>
</html>
