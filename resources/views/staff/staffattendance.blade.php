<!DOCTYPE html>
<html>
<head>
	<title>Staff_attendence Records</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">


</head>
<body>

	<div class="container">
		<h1 class="text-info">Staff Attendance Records</h1>

		<form method="POST" action="staff/staff_attendance">
		@csrf
	

	<div class="col-md-4">
		<label>Staff Name</label>
		<input type="text" name="staff_name" class="form-control" placeholder="Staff Name">
		
	</div>

	<div class="col-md-4">
		<label>In Time</label>
		<input type="time" name="staff_intime" class="form-control" placeholder="In Time">
		

	</div>
	<div class="col-md-4">
		<label>Out Time</label>
		<input type="time" name="staff_outtime" class="form-control" placeholder="Out Time">
		

	</div>


	<br>
	<div class="col-md-4">
		<button type="submit" class="btn btn-primary" >Submit</button>

		
	</div>
	
</div>

</form>

		
	</div>

</body>
</html>