<style>
	td{
		padding: 10px;
	}
</style>

<?php

include("connection.php");
error_reporting(0);

$query = "SELECT * FROM student";

$data = mysqli_query($con,$query);

$toatal = mysqli_num_rows($data);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Data</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="col-lg-10 m-auto">

		<form method="POST">

			<br><br><div class="card">

				<div class="card-header ">

<h1 class="text-dark text-center"> Display Data </h1>

<center><table border="2">
	<tr class="text-white text-center bg-success" style="padding: 20px;">
		<th>STUDENT_NO</th>
		<th>STUDENT_NAME</th>
		<th>FATHER_NAME</th>
		<th>MOTHER_NAME</th>
		<th>AGE</th>
		<th>HOME ADDRESS</th>
		<th>REGISTRATION_DATE</th>
		<th colspan="2">OPERATIONS</th>
	</tr>

<?php  

while($result = mysqli_fetch_assoc($data))
{
	echo "<tr>
		<td>".$result['STUDENT_NO']."</td>
		<td>".$result['STUDENT_NAME']."</td>
		<td>".$result['FATHER_NAME']."</td>
		<td>".$result['MOTHER_NAME']."</td>
		<td>".$result['AGE']."</td>
		<td>".$result['ADDRESS']."</td>
		<td>".$result['REG_DATE']."</td>

		<td><a href='update.php?sno=$result[STUDENT_NO]&sn=$result[STUDENT_NAME]&fname=$result[FATHER_NAME]&mname=$result[MOTHER_NAME]&age=$result[AGE]&address=$result[ADDRESS]&rdate=$result[REG_DATE]'>Update</a></td> 
		<td><a href='delete.php?sno=$result[STUDENT_NO] ' onclick='return checkdelete()'> Delete </a></td>
	</tr>";
	
}

?>
</table><br>
<a href='index.php'>click to insert data</a>

	<script>
		function checkdelete()
		{
			return confirm( "Are You Sure You Want To Delete This Record ?");
		}

	</script>	
</body>
</html>