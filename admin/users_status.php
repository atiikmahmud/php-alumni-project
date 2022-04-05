<?php include 'db/db.php'; ?>


<?php  
	$get_id = $_GET['uid'];

	if (isset($_GET['uid']) && $_GET['ustatus'] == 0) {
		$query = "UPDATE users SET status = 1 WHERE id = '$get_id'";
		$result = mysqli_query($con,$query);

	    if ($result) {
	        echo "<script>alert('User Enabled')</script>";
	        echo "<script>window.location.href='users.php'</script>";
	    }
	}elseif (isset($_GET['uid']) && $_GET['ustatus'] == 1) {
		$query = "UPDATE users SET status = 0 WHERE id = '$get_id'";
		$result = mysqli_query($con,$query);

	    if ($result) {
	        echo "<script>alert('User Disabled')</script>";
	        echo "<script>window.location.href='users.php'</script>";
	    }
	}
  
?>