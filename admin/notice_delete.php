<?php include 'inc/check_session.php'; ?>
<?php include 'inc/fetch_user.php'; ?>


<?php  
	

	if (!isset($_SESSION['id'])) {
		header("location: index.php");
	}
?>


<?php
                                    
    if(isset($_GET["uid"])) {
        include 'db/db.php';
        $id = $_GET['uid'];

        $query = "DELETE FROM users_notice WHERE id = '$id'";
                    $result = mysqli_query($con,$query);
                    if ($result) {
                        echo "<script>alert('Notice DELETED Successfully')</script>";
                        echo "<script>window.location.href='send_notice.php'</script>";
                    }else{
                        echo "<script>alert('Database Delete Error')</script>";
                    }           
        
        
        
    }else{
    	echo "<script>window.location.href='send_notice.php'</script>";
    }
    
?>