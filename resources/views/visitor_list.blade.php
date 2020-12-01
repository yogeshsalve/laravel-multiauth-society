<!DOCTYPE html>
<html>
<head>
    <title>Society</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">


    



</head>
<body>

<div class="container">
<a href="member"><button>Back to visitor form</button></a>
</div>


<div class="container">
<h1 class="text-info text-center ">List of Visitors</h1>
	<br>
	<form method="POST" action="visitor_list">
		@csrf
	
<div class="row input-datarange">

	<div class="col-md-4">
		<input type="date" name="date1" class="form-control" placeholder="From Date">
		<label>Please select Date First</label>
		
	</div>

	<div class="col-md-4">
		<input type="date" name="date2" class="form-control" placeholder="To Date">
		

	</div>

	<div class="col-md-4">
		<button type="submit" id="filter" class="btn btn-primary" >Submit</button>

		
	</div>
	
</div>

</form>
<br>

<div class="table-resposive">

	<table class="table table-bordered table-striped" id="dataTables-example1">
		<thead>
			<tr>
				<th>Visitor Name</th>
				<th>From</th>
				<th>To</th>
        <th>Contact</th>
        <th>Entry_time</th>
        <th>Exit_time</th>
			</tr>
		</thead>
		@foreach($data as $i)

		<tr>
			<td>{{$i->visitor_name}} </td>
			<td>{{$i->visit_from}}</td>
			<td>{{$i->visit_to}}</td>
      <td>{{$i->visitor_contact}}</td>
      <td>{{$i->Entry_time}}</td>
      <td>{{$i->Exit_time}}</td>
		</tr>

		@endforeach

		
	</table>
	
</div>








 



 </table>
</div>  
</div>
</body>
</html>


<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
                $('#dataTables-example1').DataTable({
                        responsive: true
                });
            });



</script>
