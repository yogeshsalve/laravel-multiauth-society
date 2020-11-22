@extends('layouts.auth')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Dashboard</title>

    <style>
    html,body{
        max-width:100%;
        overflow-x:hidden;
    }
    /* .maindiv{
        padding-top: -0.5rem;
    } */
    .navbar-default{
    background-color:#0f1442;
    border-color: white;
  }
  .card-color{
    background-color:#6e7799;
    border-color: white;
  }
  .thcolor{
    background-color: #0f1442;
    color:white;
  }
  /* .box{
    background-color:#fbf2fc;
  } */
    </style>
</head>
<body>
@section('content')

<!-- navbar -->
<div>
  <nav class="navbar navbar-default navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="">Society</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/maintenance">Pay Maintenance</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/household">Household</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/amenities">Amenities</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="/parking">Parking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/complaints">Complaints</a>
      </li>
     
    </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="/contactus">Contact Us</a>
    </li>
    </ul>
  </div>
  </nav>
<!-- navbar -->

<div>
  <div class="row justify-content-center">
    <div class="col-lg-12">
      <div class="card">
        <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
          <div class="card-body card-color mb-3">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
            @endif
            <h5 class="text-white">Welcome {{ __( Auth::user()->name) }}</h5>

              <div class="card ">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="card ">
                      <div class="card-body box">
                        <h5 class="card-title"></h5>
        
        
                        <div class="container " style="overflow-x:auto;">
                          <!-- <div class="card"> -->
                            <!-- <div class="card-header text-white" style="background-color: #1d5bb8;">
                            <h4><center>Todays Visitors</center></h4>
                            </div> -->
  <!-- <br> -->
                       <!-- table      -->
<div class="table-responsive text-nowrap">                      
<table class="table table-hover" border="1">

<center><h4>Todays Visitors</center></h4>

<tr>
<th class="thcolor" scope="col">Id</td>
<th class="thcolor" scope="col">Visitors Name</th>
<!-- <th>Visiting From</th> -->
<th class="thcolor" scope="col">Visiting To</th>
<!-- <th>Contact No</th> -->
<th class="thcolor" scope="col">Vehicle No</th>
<!-- <th>Entry Time</th> -->
<!-- <th>Exit Time</th> -->

</tr>
@foreach($visitors as $visitor)

<tr>
<td>{{$visitor['visitor_id']}}</td>
<td>{{$visitor['visitor_name']}}</td>
<!-- <td>{{$visitor['visit_from']}}</td> -->
<td>{{$visitor['visit_to']}}</td>
<!-- <td>{{$visitor['visitor_contact']}}</td> -->
<td>{{$visitor['visitor_vehicle_no']}}</td>
<!-- <td>{{$visitor['Entry_time']}}</td> -->
<!-- <td>{{$visitor['Exit_time']}}</td> -->

</tr>
@endforeach
  
</table>
</div>
  
  
                       <!-- table -->
                         <!-- </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                      <h5 class="card-title">Events, Notices and Meetings</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Responsibilities</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Staff Status</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
</body>
</html>
