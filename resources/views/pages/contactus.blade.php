@extends('layouts.app')
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
  /* .thcolor{
    background-color: #0f1442;
    color:white;
  } */
  .table-responsive{
    max-height:350px;
  }
  /* .box{
    background-color:#fbf2fc;
  } */

    </style>
    <style type="text/css">
	body {
  margin:0;
}
.wrapper {
    width: 100%;
    height: auto;
    position: absolute;
    background: linear-gradient(45deg,#F17C58, #E94584, #24AADB , #27DBB1,#FFDC18, #FF3706);
    background-size: 600% 100%;
    animation: gradient 15s linear infinite;
    animation-direction: alternate;
}
@keyframes gradient {
    0% {background-position: 0%}
    100% {background-position: 100%}
}

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
</div>

<!-- main -->
<div class="wrapper">

<div class="row">
    <div class="col-sm-4 mt-3 mb-3">

        <img src="images/logo.png" class="rounded mx-auto d-block" alt="">
        <br>
        <h3 align="center">Get in Touch</h3>
        <br>
        <h3 align="center">Phone: +919767 669 669</h3>
        <br>
        <h3 align="center">Email: hello@mysociety.com</h3>
        <br>
        <h3 align="center"><b>ADDRESS</b></h3>
        <br>
        <h4 align="center"><b>Address Line 1</b></h4>
        <h4 align="center"><b>Address Line 2</b></h4>
        <h4 align="center"><b>Address Line 3</b></h4>
    </div>
    <div class="col-sm-8 mt-3 mb-3">

  
<!-- contact form -->
<div class="container">
<div class="card">
<div class="card-header text-white" style="background-color: #1d5bb8;">
<h4><center>Write Below to Reach Us !</center></h4>
</div>
  <div class="card-body card-color shadow p-3  rounded">


<div class="container">
<form action="contactus" method="POST">
@csrf
    <div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" name="contact_name" id="inputName" placeholder="Enter your name">
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" name="contact_email" id="inputEmail4">
        </div>
        <div class="form-group col-md-6">
        <label for="inputcontact">Contact No</label>
        <input type="text" class="form-control" name="contact_no" id="inputcontact">
        </div>
    </div>

    <div class="form-group">
    <label for="inputSubject">Subject</label>
    <input type="text" class="form-control" name="contact_subject" id="inputSubject" placeholder="Enter Subject">
    </div>
    <div class="form-group">
    <label for="messagearea">Message</label>
    <textarea class="form-control" name="contact_message" id="messagearea" rows="3"></textarea>
    </div>



    <button type="submit" class="btn btn-primary flow-right">Submit</button>
</form>
</div>
</div>
</div>
</div>
<!-- contact form -->






  </div>
</div>

</div>
<!-- main -->










@endsection
</body>
</html>
















































<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<br>
<div class="container mt-10">
    <div class="card" style="width: 65rem;">
        <div class="card-header text-white" style="background-color: #1d5bb8;">
            <h2><center>Contact Form</center></h2>
        </div>
    
</div>
</div>




    
</body>
</html> -->