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

        $query2 = "SELECT * FROM users WHERE id = '$id'";
        $result2 = mysqli_query($con,$query2);
        while ($row = mysqli_fetch_assoc($result2)) {
            $image = $row['image'];
            $file_exists = file_exists("../images/uploads/".$image);
            if (!$file_exists) {
                echo "<script>alert('Image Not Found')</script>";
            }else{
                
                    $query = "DELETE FROM users WHERE id = '$id'";
                    $result = mysqli_query($con,$query);
                    if ($result) {
                        echo "<script>alert('User DELETED Successfully')</script>";
                        echo "<script>window.location.href='users.php'</script>";
                    }else{
                        echo "<script>alert('Database Delete Error')</script>";
                    }
                }
                
            
            }
        
        
    }else{
    	echo "<script>window.location.href='users.php'</script>";
    }
    
?>