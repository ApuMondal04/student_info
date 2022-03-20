<?php

include("connection.php");
error_reporting(0);
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

  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body>

	<div class="col-lg-6 m-auto">

		<form method="POST">

			<br><br><div class="card">

				<div class="card-header bg-dark">
					<h1 class="text-white text-center">Insert Student Data</h1>
					<a href="display.php" style="text-decoration: none;"> View <span class="fas fa-stream"></span></a>
					
				</div>
				
				<br>
				<input type="number" name="no" class="form-control" placeholder="Student No." required><br>

				
				<input type="text" name="name" class="form-control" placeholder="Student Name" required><br>

				
				<input type="text" name="fname" class="form-control" placeholder="Father's Name"><br>

				
				<input type="text" name="mname" class="form-control" placeholder="Mother's Name"><br>

				<input type="number" name="age" class="form-control" placeholder="Age" required><br>

				<input type="text" name="address" class="form-control" placeholder="Home Address" required><br>

				<label>Registration Date</label>
				<input type="date" name="rdate" class="form-control" required><br>

				<button class="btn btn-success" type="Submit" name="submit"> Submit </button><br>

			</div>
			
		</form>
		
	</div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
	
	$STUDENT_NO = $_POST['no'];
	$STUDENT_NAME = $_POST['name'];
	$FATHER_NAME = $_POST['fname'];
	$MOTHER_NAME = $_POST['mname'];
	$AGE = $_POST['age'];
	$ADDRESS = $_POST['address'];
	$REG_DATE = $_POST['rdate'];

	$query ="INSERT INTO student(STUDENT_NO, STUDENT_NAME, FATHER_NAME, MOTHER_NAME,AGE,ADDRESS,REG_DATE) VALUES ('$STUDENT_NO','$STUDENT_NAME','$FATHER_NAME','$MOTHER_NAME','$AGE','$ADDRESS','$REG_DATE')";

	$data = mysqli_query($con,$query);

	if($data)
	{
		echo "<center>Added successful <a href='display.php'>click to view</a>";
		//header('location:display.php');

		/*echo "
				<div aria-live='polite' aria-atomic='true' style='position: relative; min-height: 200px;''>
  <div class='toast' style='position: absolute; top: 0; right: 0;' data-autohide='false'>
    <div class='toast-header'>
      <svg class='rounded mr-2' width='20' height='20' xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid slice'
        focusable='false' role='img'>
        <rect fill='#007aff' width='100%' height='100%' /></svg>
      <strong class='mr-auto'>Bootstrap</strong>
      <small>11 mins ago</small>
      <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div>
    <div class='toast-body'>
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
		";	*/
	}


}
?>