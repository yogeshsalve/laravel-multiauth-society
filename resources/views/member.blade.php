@extends('layouts.auth')
<html>
<head>

<style>
  .card-header{
        height: 40px;
   }
   html, body {
    max-width: 100%;
    overflow-x: hidden;
}
</style>

</head>
<body>
@section('content')
<!-- <div >
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="">Staff Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/maintable">Maintenance List</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/flats">Flats Management</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/evemeets">Events and Meetings</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="/accounts">Account Entry and Financial State</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/documents">Upload Documents</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/chat">Chat</a>
      </li>
  
    </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="/contact">Contact</a>
    </li>
    </ul>
  </div>
  </nav>
</div> -->

<!-- navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="margin-top:100px;">
                <a class="navbar-brand" href="#">
    <img src="/images/logo1.png" width="30" height="30" class="d-inline-block align-top" alt="">
    TECHNOKRAFT
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="visitors">Visitor Management<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Daily Staff & Service</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Child Security</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Delivery Management</a>
      </li>
      
      
    </ul>
    
   
    
  </div>
</nav>
<!-- navbar -->
<!-- first div -->

<!-- first div -->
@endsection
</body>
</html>

                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} -->

