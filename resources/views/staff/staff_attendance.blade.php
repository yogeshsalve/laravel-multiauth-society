<!DOCTYPE html>
<html>
<head>
	<title>staff_attendence List</title>
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
		<h1>Staff Attendance List</h1>

		<div class="table-resposive">

	<table class="table table-bordered table-striped" id="dataTables-example2">
		<thead>
			<tr>
				<th>Name</th>
				<th>IN Time</th>
				<th>Out Time</th>
			</tr>
		</thead>
		@foreach($data as $i)

		<tr>
			<td>{{$i->staff_name}} </td>
			<td>{{$i->staff_intime}}</td>
			<td>{{$i->staff_outtime}}</td>
		</tr>

		@endforeach

		
	</table>
	
</div>
</table>
</div>

</body>
</html>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


<script type="text/javascript">
  $(document).ready(function() {
                $('#dataTables-example2').DataTable({
                        responsive: true
                });
            });



</script>