<?php 
	session_start();
	include('db/db.php');

	if (isset($_POST['login'])) {
		$email 	  = mysqli_real_escape_string($con,$_POST['email']);
		$password = mysqli_real_escape_string($con,$_POST['password']); 

		$sql 		= "SELECT id FROM admin WHERE email = '$email' and password = '$password' ";
		$result 	= mysqli_query($con,$sql);
		$row 		= mysqli_fetch_array($result);
		$count 		= mysqli_num_rows($result);

		if($count) {
			$_SESSION['id'] = $row['id'];
			header("Location: dashboard.php");
		}else {
			echo "<script> alert('Your Login Name or Password is invalid'); </script>";
		}
	}

?>

