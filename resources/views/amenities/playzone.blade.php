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
  <h5 class="card-header"><a href="amenities"><button>back</button></a></h5>
    <div class="card-body">
      
        

<!-- table and display -->
<div class="row">
      <div class="col-6">
                                    <!--  <h1 align="center">GYM BOOKING</h1> -->
        <form action="playzone" method="POST">
          @csrf
            <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                </div>
        </div>
        <div class="form-group row">
            <label for="flat_no" class="col-md-4 col-form-label text-md-right">{{ __('Flat No:') }}</label>

                <div class="col-md-6">
                    <input id="flat_no" type="text" class="form-control @error('flat_no') is-invalid @enderror" name="flat_no" value="{{ old('flat_no') }}" required autocomplete="flat_no" autofocus>

                                @error('flat_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                </div>
        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date">

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <div class="form-group row" id="a">

                            <label for="slot" class="col-md-4 col-form-label text-md-right">{{ __('Select Your Slot') }}</label>

                            <div class="col-md-6">
                                <select id="slot" class="form-control" name="slot">
                                        <option selected>6:00-7:00 AM</option>
                                        <option>7:00-8:00 AM</option>
                                        <option>8:00-9:00 AM</option>
                                        <option>6:00-7:00 PM</option>
                                        <option>7:00-8:00 PM</option>
                                        <option>8:00-9:00 PM</option>

                                 </select>
                            </div>
                    </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Book') }}
                                </button><br><br>
                            </div>
                        </div>
</form>
</div>
<div class="col-6">
                       <div>
                          <!-- <div class="row"> -->
                            <!-- x -->
                              <div class="table-responsive-sm">
                                <h1 align="center">Play Zone Booking List</h1>
                                    <table border="2" id="customers"  class="table">
                                      <tr>
                                        <th>Sr.no</th>
                                        <th>name</th>
                                        <th>flat_no</th>
                                        <th>date</th>
                                        <th>slot</th>
                                      </tr>
                                      @foreach($playzones as $play)
                                      <tr>
                                        <td>{{$play['id']}}</td>
                                        <td>{{$play['name']}}</td>
                                        <td>{{$play['flat_no']}}</td>
                                        <td>{{$play['date']}}</td>
                                        <td>{{$play['slot']}}</td>
                                      </tr>
                                      @endforeach
                                     
                                    </table>

                        
                                    </div>

                              </div>
  </div>
                          </div>
                        </div>
<!-- table and display -->


       
        
      
    </div>
  </div>
</div>
<!-- bootstrap card -->













@endsection
  
  
  


