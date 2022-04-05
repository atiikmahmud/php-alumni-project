<?php 

	include('db/db.php');
	if (isset($_POST['signup'])) {

		$name       = mysqli_real_escape_string($con,$_POST['name']);
		$id_number  = mysqli_real_escape_string($con,$_POST['id_number']);		
		$batch      = mysqli_real_escape_string($con,$_POST['batch']);
		$gender     = mysqli_real_escape_string($con,$_POST['gender']);
		$birthdate  = mysqli_real_escape_string($con,$_POST['birthdate']);
		$district   = mysqli_real_escape_string($con,$_POST['district']);
		$prjs       = mysqli_real_escape_string($con,$_POST['prjs']);
		$ptjs       = mysqli_real_escape_string($con,$_POST['ptjs']);
		$mobile     = mysqli_real_escape_string($con,$_POST['mobile']);
		$email      = mysqli_real_escape_string($con,$_POST['email']);
		$password	= mysqli_real_escape_string($con,$_POST['password']); 
		$status     = mysqli_real_escape_string($con,$_POST['status']);

		if (!empty($name) || !empty($id_number) || !empty($batch) || !empty($gender) || !empty($birthdate) || !empty($district) || !empty($prjs) || !empty($ptjs) || !empty($mobile)|| !empty($email) || !empty($password)) {
			
			$sql1 = "SELECT id FROM users WHERE email = '$email' and id_number = '$id_number'";
			$result1 = mysqli_query($con,$sql1);
			$row1 = mysqli_fetch_array($result1);
			$count1 = mysqli_num_rows($result1);

			if ($count1) {
				echo "<script> alert('Email or ID Number Already Exists'); </script>";
			}

			if (strlen($id_number) < 9)
			{
				echo "<script> alert('Error ! Invalid ID Number...!'); </script>";
			}

			if (preg_match('/[^0-9]+/i',$id_number)) 
			{
			echo "<script> alert('Error ! ID Numnber must only contain numerical...!'); </script>";
			}

            if (strlen($password) < 6)
            {
            echo "<script> alert('Error ! Password must be contain 6 character...!'); </script>"; 
            }

            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
            {
             echo "<script> alert('Error ! Email address is not valid...!'); </script>"; 
            }

			else{
				$sql = "INSERT INTO users(name,id_number,batch,gender,birthdate,district,prjs,ptjs,mobile,email,password,status) VALUES('$name','$id_number','$batch','$gender','$birthdate','$district','$prjs','$ptjs','$mobile','$email','$password','$status')";
				
				
				$result = mysqli_query($con,$sql);
				

				if($result) {
					echo "<script> alert('User Successfully Registered'); </script>";
					echo "<script> window.location.href='login.php'; </script>";
				}else {
					echo "<script> alert('User Not Inserted'); </script>";
				}
			}
		}else{
			echo "<script> alert('ERROR: Field Empty!!!'); </script>";
		}

		
	}

?>

