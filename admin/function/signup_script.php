<?php 

	include('db/db.php');
	if (isset($_POST['signup'])) {

		$name       = mysqli_real_escape_string($con,$_POST['name']);
		$email      = mysqli_real_escape_string($con,$_POST['email']);
		$password	= mysqli_real_escape_string($con,$_POST['password']); 

		if (!empty($name) || !empty($email) || !empty($password)) {
			
			$sql1 = "SELECT id FROM admin WHERE email = '$email' ";
			$result1 = mysqli_query($con,$sql1);
			$row1 = mysqli_fetch_array($result1);
			$count1 = mysqli_num_rows($result1);

			if ($count1) {
				echo "<script> alert('Email or ID Number Already Exists'); </script>";
			}

            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
            {
             echo "<script> alert('Error ! Email address is not valid...!'); </script>"; 
            }

			else{
				$sql = "INSERT INTO admin(name,email,password) VALUES('$name','$email','$password')";
				$result = mysqli_query($con,$sql);

				if($result) {
					echo "<script> alert('Admin Successfully Registered'); </script>";
					echo "<script> window.location.href='dashboard.php'; </script>";
				}else {
					echo "<script> alert('Admin User Not Inserted'); </script>";
				}
			}
		}else{
			echo "<script> alert('ERROR: Field Empty!!!'); </script>";
		}

		
	}

?>

