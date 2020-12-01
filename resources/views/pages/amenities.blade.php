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
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/maintenance">Pay Maintenance</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/household">Household</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link">Amenities</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="/parking">Parking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/complaints">Complaints</a>
      </li>
     
    
    
    <li class="nav-item">
      <a class="nav-link" href="/contactus">Contact Us</a>
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


<!-- bootstrap card -->
<br>
<div class="col-lg-12">
  <div class="card mt-5">
    <h5 class="card-header">Amenities</h5>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              
            <h3 class="card-title">Gymnasium</h3>
           
           <a href="/gym" class="btn btn-primary">Click to Book your Slot</a>

            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
            <h3 class="card-title">Swimming Pool</h3>
           
           <a href="/swim" class="btn btn-primary">Click to Book your Slot</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
            <h3 class="card-title">Play Zone</h3>
           
           <a href="/gym" class="btn btn-primary">Click to Book your Slot</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- bootstrap card -->











<!-- <div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                

                <div class="card-body bg-secondary mb-3">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 class="text-white">Welcome {{ __( Auth::user()->name) }}</h5>

<div class="card">
  
<div class="row">
  <div class="col-sm-12">
    <div class="card ">
      <div class="card-body">
       

        <div class="row">
          <div class="col-sm-3">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
            <img src="/images/gym.png" class="card-img-top" height="200" alt="...">
            
            <div class="card-body">
            <h3 class="card-title">Gymnasium</h3>
           
            <a href="/gym" class="btn btn-primary">Click to Book your Slot</a>
            </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
            <img src="/images/pool.jpg" class="card-img-top" height="200" alt="...">
            <div class="card-body">
            <h3 class="card-title">Swimming pool</h3>
            
            <a href="#" class="btn btn-primary">Click to Book your Slot</a>
            </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
            <img src="/images/tennis.jpg" class="card-img-top" height="200" alt="...">
            <div class="card-body">
            <h3 class="card-title">Tennis Court</h3>
            
            <a href="#" class="btn btn-primary">Click to Book your Slot</a>
            </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
            <img src="/images/pool.jpg" class="card-img-top" height="200" alt="...">
            <div class="card-body">
            <h3 class="card-title">Swimming pool</h3>
            
            <a href="#" class="btn btn-primary">Click to Book your Slot</a>
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
</div> -->

@endsection