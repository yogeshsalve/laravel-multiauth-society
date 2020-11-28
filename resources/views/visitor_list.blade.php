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
    background-color:#F4F6F9;
    border-color: white;
  }
  .thcolor{
    background-color: #0f1442;
    color:white;
  }
  .table-responsive{
    max-height:350px;
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
  <nav class="navbar fixed-top navbar-default navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="">Society</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/member">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link">See Visitiors List</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/household">Staff Attendance Record</a>
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
                        <!-- Authentication Links -->
                       <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{__(Auth::user()->name)}} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
  </div>
  </nav>
<!-- navbar -->

<!-- top cards -->
<br><br>
<div class="container mt-5">
<div class="row">
  <div class="col-sm-4">
    <div class="card text-white bg-info mb-3">
      <div class="card-body">
        

      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-success mb-3">
      <div class="card-body">
        

      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card text-white bg-warning mb-3">
      <div class="card-body">
        

      </div>
    </div>
  </div>

</div>
</div>
<!-- top cards -->










<!-- card -->
  

  














 

 <div class="container-fluid mt-4">
  <div class="col-sm-12">
    <div class="card">
    <!-- style="height:24rem;" -->
      <div class="card-body shadow p-3  rounded">
        <!-- <h5 class="card-title">Notice</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a> -->
<div class="table-responsive">
        <table border="1" class="table">
<tr>
<th class="thcolor">Id</td>
<th class="thcolor">Visitors Name</th>
<th class="thcolor">Visiting From</th>
<th class="thcolor">Visiting To</th>
<th class="thcolor">Contact No</th>
<th class="thcolor">Vehicle No</th>
<th class="thcolor">Entry Time</th>
<th class="thcolor">Exit Time</th>

</tr>
@foreach($visitors as $visitor)

<tr>
<td>{{$visitor['visitor_id']}}</td>
<td>{{$visitor['visitor_name']}}</td>
<td>{{$visitor['visit_from']}}</td>
<td>{{$visitor['visit_to']}}</td>
<td>{{$visitor['visitor_contact']}}</td>
<td>{{$visitor['visitor_vehicle_no']}}</td>
<td>{{$visitor['Entry_time']}}</td>
<td>{{$visitor['Exit_time']}}</td>

</tr>
@endforeach

</table>
</div>


      </div>
    </div>
  </div>










  
 
  








@endsection
</body>
</html>