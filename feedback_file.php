<?php include 'inc/check_session.php'; ?>
<?php include 'inc/fetch_user.php'; ?>

<?php 
    if(isset($_POST['submit']))
    {
        $sender       = $_POST['sender'];
        $title        = $_POST['title'];
        $feedbackdata = $_POST['feedbackdata'];
        $attachment = $_FILES['attachment']['name'];
        $image_tmp = $_FILES['attachment']['tmp_name'];
        
        move_uploaded_file($image_tmp,"feedback/$attachment");
        $query = "insert into feedback(sender,title,feedbackdata,attachment) values ('$sender','$title','$feedbackdata','$attachment')";
        $result = mysqli_query($con, $query);
        if($result==1)
        {       
        echo "<script> alert('Feedback Successfully Send !'); </script>";
		echo "<script> window.location.href='feedback.php'; </script>";
        
        }
        else {       
        echo "<script> alert('Feedback not send !'); </script>";
        echo "<script> window.location.href='feedback.php'; </script>";
             }
    }
?>