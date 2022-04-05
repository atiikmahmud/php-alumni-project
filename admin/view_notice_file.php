<?php include 'inc/check_session.php'; ?>
<?php include 'inc/fetch_user.php'; ?>

<?php 
    if(isset($_POST['submit']))
    {
        
        $title        = $_POST['title'];
        $notice       = $_POST['notice'];
        
        
        
        $query = "insert into users_notice(title,notice) values ('$title','$notice')";
        $result = mysqli_query($con, $query);
        if($result==1)
        {       
        echo "<script> alert('Notice Successfully Send !'); </script>";
		echo "<script> window.location.href='view_notice.php'; </script>";
        
        }
        else {       
        echo "<script> alert('Feedback not send !'); </script>";
        echo "<script> window.location.href='view_notice.php'; </script>";
             }
    }
?>