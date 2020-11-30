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
        <a class="nav-link" href="/admin">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/maintenance">Manage Flats</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/household">Account</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link">Maintenance & Utility Bills</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/Upload Documents">Amenities</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="/Inventory">Parking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Reports">Complaints</a>
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

<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body card-color">
  
    <div class="row">
        <div class="col-sm-4">
            <div class="card" style="height:25rem;">
                <div class="card-body shadow p-3  rounded">
                    <h5 class="card-title"><b><center>Monthly Maintenance Entry</center></b></h5>
                    <hr>
                    @if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('status')}}
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif   

@if(Session::get('status1'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{Session::get('status1')}}
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif 
        
<!-- form -->
<div class="container">
   <form action="maintenance-entry" method="POST">
  @csrf
  
  <div class="form-group">
    <!-- <label for="inputName">Name</label> -->
    <select class="form-control" name="name" id="name">
    @foreach($users as $user)
<option>{{$user['name']}}</option>
  @endforeach
    </select>
</div>




 
<div class="form-group">
  <!-- <label for="inputFrom">From</label> -->
  <select class="form-control" name="year" id="year">
  <option value="" disabled selected>Select Year</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
</select>
</div>

<div class="form-group">
  
  <select class="form-control" name="month" id="month">
    <option value="" disabled selected>Select Month</option>
    <option value="January">January</option>
    <option value="Febuary">Febuary</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
</select>
</div>

<div class="form-group">
  <!-- <label for="inputTo">Visitng To</label> -->
  <select class="form-control" name="amount" id="amount">
<option value="1000">1000</option>
</select>
</div>






  
  
    
<!-- <div class="form-row"> -->
<button><a href="/admin-maintenance">Back</a></button>
  <button type="submit" class="btn btn-primary float-right">Create Entry</button>
  <!-- </div> -->
  <br>
</form>
</div>
        <!-- form -->
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card" style="height:30rem;">
      <div class="card-body shadow p-3  rounded">
        <h5 class="card-title"><b>Maintenance Payment Status</b></h5>
        <p class="card-text">To see the payment status choose below flat owner name</p>
        
        <div class="container">
            <form action="maintenance-entry" method="POST">
            @csrf
  
            <div class="form-group">
            <select class="form-control" name="name" id="name">
            @foreach($users as $user)
            <option>{{$user['name']}}</option>
            @endforeach
            </select>
            </div>

            </form>
            <a href="#" class="btn btn-primary">Check Status</a>
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