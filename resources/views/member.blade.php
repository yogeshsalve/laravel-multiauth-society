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
  <a class="navbar-brand" href="">Abhiruchi Society</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/visitor_list">See Visitiors List</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">Staff Attendance Record</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="staff-amenities">Manage Amenities</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="">Manage Parking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Complaints</a>
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
<div class="card">
  <div class="card-body card-color">
  <div class="row">
  <div class="col-sm-12">
    <div class="card" >
      <div class="card-body shadow p-3  rounded" style="height:24rem;">
        <h5 class="card-title" align="center"> Visitors Entry Form</h5>
        @if(Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{Session::get('status')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif      



        <div class="container">
          <form action="member" method="POST">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="visitor_name" id="visitor_name" placeholder="Enter Name">
            </div>

            <div class="form-row"> 
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="visit_from" id="visit_from" placeholder="Coming From">
              </div>

            <div class="form-group col-md-6">
              <select id="visit_to" class="form-control" name="visit_to">
                @foreach($users as $user)
                <option>{{$user['flat_no']}}&nbsp;{{$user['name']}}</option>
                @endforeach
              
              </select>
            </div>
          </div>

<div class="form-row"> 
<div class="form-group col-md-6">
  <!-- <label for="inputFrom">From</label> -->
  <input type="text" class="form-control" name="visitor_contact" id="visitor_contact" placeholder="Contact No." pattern="[1-9]{1}[0-9]{9}">
</div>
<div class="form-group col-md-6">
  <!-- <label for="inputTo">Visitng To</label> -->
  <input type="text" class="form-control" name="visitor_vehicle_no" id="visitor_vehicle_no" placeholder="Vehicle No.">
</div>
</div>

<div class="form-row"> 
<div class="form-group col-md-3">
  <!-- <label for="inputFrom">From</label> -->
  <input type="date" class="form-control" name="Entry_time" id="Entry_time">
  <!-- <input type="date" class="form-control" name="Entry_time" id="Entry_time" placeholder="In Time"> -->
</div>
<div class="form-group col-md-3">
  <!-- <label for="inputFrom">From</label> -->
  <input type="time" class="form-control" name="Entry_time" id="Entry_time">
  <!-- <input type="date" class="form-control" name="Entry_time" id="Entry_time" placeholder="In Time"> -->
</div>
<div class="form-group col-md-6">
  <!-- <label for="inputTo">Visitng To</label> -->
  <input type="date" class="form-control" name="Exit_time" id="Exit_time" placeholder="Out Time">
</div>
</div>


  
  
    
<!-- <div class="form-row">  -->
  <button type="submit" class="btn btn-primary float-left">Back</button>
  <button type="submit" class="btn btn-primary float-right">Create Entry</button>
  <!-- </div> -->
  <br>
</form>




  </div>




      </div>
      </div>
      </div>














<!-- <div class="col-sm-6">
  <div class="card" >
    
    <div class="card-body shadow p-3  rounded" style="height:24rem;">
      <h5 class="card-title" align="center"> Staff Entry Form</h5> -->
          <!-- @if(Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{Session::get('status')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
          @endif       -->
        <!-- <div class="container"> 
          
        <form method="POST" action="member">
		@csrf
	

	<div class="col-md-12">
		<label>Staff Name</label>
		<input type="text" name="staff_name" class="form-control" placeholder="Staff Name">
		
	</div>
  <div class="row">
	<div class="col-md-6">
		<label>In Time</label>
		<input type="time" name="staff_intime" class="form-control" placeholder="In Time">
		

	</div>
  
	<div class="col-md-6">
		<label>Out Time</label>
		<input type="time" name="staff_outtime" class="form-control" placeholder="Out Time">
		

	</div>
  </div>

	<br>
	<div class="col-md-6">
		<button type="submit" class="btn btn-primary" >Submit</button>

		
	</div>
	
</div>

</form>





        </div>
      </div>
    </div> -->
  </div>
</div>

</div>
@endsection
</body>
</html>