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
        
        move_uploaded_file($image_tmp,"archives/uploads/$attachment");
        $query = "insert into archive(sender,title,feedbackdata,attachment) values ('$sender','$title','$feedbackdata','$attachment')";
        $result = mysqli_query($con, $query);
        if($result==1)
        {       
        echo "<script> alert('Archived Successfully'); </script>";
		echo "<script> window.location.href='view_archive.php'; </script>";
        
        }
        else {       
        echo "<script> alert('Not Uploaded'); </script>";
        echo "<script> window.location.href='archive.php'; </script>";
             }
    }
?>