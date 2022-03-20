<?php

include("connection.php");
error_reporting(0);

$_GET['sno'];
$_GET['sn'];
$_GET['fname'];
$_GET['mname'];
$_GET['age'];
$_GET['address'];
$_GET['rdate'];
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

	<div class="col-lg-6 m-auto">

		<form method="POST">

			<br><br><div class="card">

				<div class="card-header bg-dark">
					<h1 class="text-white text-center">Insert Student Data</h1>
					
				</div>
				
				<label>Student No:</label>
				<input type="number" value="<?php echo $_GET['sno']; ?>" name="no" class="form-control"><br>

				<label>Student Name:</label>
				<input type="text" value="<?php echo $_GET['sn']; ?>" name="name" class="form-control"><br>

				<label>Father's Name:</label>
				<input type="text" value="<?php echo $_GET['fname']; ?>" name="fname" class="form-control"><br>

				<label>Mother's Name:</label>
				<input type="text" value="<?php echo $_GET['mname']; ?>" name="mname" class="form-control"><br>

				<label>Age:</label>
				<input type="number" value="<?php echo $_GET['age']; ?>" name="age" class="form-control"><br>

				<label>Home Address:</label>
				<input type="text" value="<?php echo $_GET['address']; ?>" name="address" class="form-control"><br>

				<label>Registration Date:</label>
				<input type="date" value="<?php echo $_GET['rdate']; ?>" name="rdate" class="form-control"><br>

				<button class="btn btn-success" value="<?php echo $_GET['sno']; ?>" type="Submit" name="submit"> Submit </button><br>

			</div>
			
		</form>
		
	</div>
</body>
</html>

<?php
if ($_POST['submit']) {

	$no = $_POST['no'];
	$name= $_POST['name'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$rdate = $_POST['rdate'];

	$query = "UPDATE student SET STUDENT_NO='$no',STUDENT_NAME='$name',FATHER_NAME='$fname',MOTHER_NAME='$mname',AGE='$age',ADDRESS='$address',REG_DATE='$rdate' WHERE STUDENT_NO='$no'";

	$data = mysqli_query($con,$query);

	if($data)
	{
		echo "<center><br>Record Updated Successfully <a href='display.php'>click to view</a>";
	}
	else
	{
		echo "Record Not Update";
	}

}
else
{
	
}
?>