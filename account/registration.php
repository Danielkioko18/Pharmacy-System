	<!-- ================= PHP SCRIPT FOR REGISTRATION================================= --> 
<?php 
// php registration session
	session_start();

// declaring session variables
	$emails="";	
	$_SESSION['success']="";

// database connection
	$conn=mysqli_connect('localhost','root',"",'booking');
	$firstname = mysqli_real_escape_string($conn,$_POST['fname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$age = mysqli_real_escape_string($conn, $_POST['age']);
	$picture = mysqli_real_escape_string($conn, $_POST['photo']);
	$password = mysqli_real_escape_string($conn, $_POST['pass']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);

//password encryption
	md5($password);
	password_hash($password, PASSWORD_DEFAULT);

	//inserting data into the table
	$insert="INSERT INTO register (FIRSTNAME,LASTNAME,EMAIL,PHONE,AGE,PHOTO,PASSWORD,DATE) VALUES('$firstname', '$lastname', '$email', '$phone', '$age', '$picture', '$password', '$date')";
	$results=mysqli_query($conn, $insert);
	if (!$results) {
		echo("FAILED");
	}

	$_SESSION['emails']=$email;
	$_SESSION['success'] = "You have logged in";
	echo($password);
	header('location: booking.php')
	mysqli_close($conn);

?>
