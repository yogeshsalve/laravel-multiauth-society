@extends('layouts.app')

@section('content')
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Society</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/maintenance">Pay Maintenance</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/household">Household</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link disabled" href="/amenities">Amenities</a>
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
</div>
<div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                <div class="card-body bg-secondary mb-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 class="text-white">Welcome {{ __( Auth::user()->name) }}<center> GYM BOOKING</center></h5>

                    <div id="content">
                    </div>
                  </div>
  
  
    <div class="row">
  <div class="col-6">
  <h1 align="center">GYM BOOKING</h1>
<form action="gym" method="POST">
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

                    <div class="form-group row">
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
<!-- <div class="col-6"> -->
  <!-- <div> -->
    <div class="row">
  <div class="col-12">
  <div class="table-responsive-sm" >
  <h1 align="center">Member List</h1>
  <table border="2" id="customers"  class="table">
    <tr>
      <th>Sr.no</th>
      <th>name</th>
      <th>flat_no</th>
      <th>date</th>
      <th>slot</th>
    </tr>
    @foreach($gyms as $gym)
    <tr>
      <td>{{$gym['id']}}</td>
      <td>{{$gym['name']}}</td>
      <td>{{$gym['flat_no']}}</td>
      <td>{{$gym['date']}}</td>
      <td>{{$gym['slot']}}</td>
    </tr>
    @endforeach
  </table>
</div>
</div>
</div>
</div>

@endsection
