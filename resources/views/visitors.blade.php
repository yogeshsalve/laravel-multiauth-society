<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>



<body>
<center>
<br>
<br>
<br>

<div class="card" style="width: 60rem;">
  <div class="card-header text-white" style="background-color: #1d5bb8;">
    <h2>Visitor Registration</h2>
  </div>
  <br>
  <div class="container">
 

  <form action="visitors" method="POST">
  @csrf
  <div class="row input-datarange">

	<div class="col-md-4">
		<input type="date" name="Entry_time" class="form-control" placeholder="From Date">
		<label>Please select Date First</label>
		
	</div>

	<div class="col-md-4">
		<input type="date" name="Exit_time" class="form-control" placeholder="To Date">
		

	</div>

	<div class="col-md-4">
		<button type="submit" id="filter" class="btn btn-primary" >Submit</button>

		
	</div>
	
</div>

  <div class="form-group">
    <!-- <label for="inputName">Name</label> -->
    <input type="text" class="form-control" name="visitor_name" id="visitor_name" placeholder="Enter Name">
  </div>

<div class="form-row"> 
<div class="form-group col-md-6">
  <!-- <label for="inputFrom">From</label> -->
  <input type="text" class="form-control" name="visit_from" id="visit_from" placeholder="Coming From">
</div>

<div class="form-group col-md-6">
  <!-- <label for="inputTo">Visitng To</label> -->
  <!-- <input type="text" class="form-control" name="visit_to" id="visit_to" placeholder="Visiting To"> -->
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
  <input type="text" class="form-control" name="visitor_contact" id="visitor_contact" placeholder="Contact No.">
</div>
<div class="form-group col-md-6">
  <!-- <label for="inputTo">Visitng To</label> -->
  <input type="text" class="form-control" name="visitor_vehicle_no" id="visitor_vehicle_no" placeholder="Vehicle No.">
</div>
</div>

<div class="form-row"> 
<div class="form-group col-md-6">
  <!-- <label for="inputFrom">From</label> -->
  <input type="datetime-local" class="form-control" name="Entry_time" id="Entry_time">
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




  </div></div>
<!-- <br><br>
  <table border="1">
<tr>
<th>Id</td>
<th>Name</th>
<th>email</th>
<th>flat no</th>
<th>Contact No</th>


</tr>
@foreach($users as $user)

<tr>
<td>{{$user['id']}}</td>
<td>{{$user['name']}}</td>
<td>{{$user['email']}}</td>
<td>{{$user['flat_no']}}</td>
<td>{{$user['contact_no']}}</td>


</tr>
@endforeach
</table> -->



</body>
</html>