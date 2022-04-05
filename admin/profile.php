<!-- start header -->

<?php  
    include 'inc/header.php';
?>

<!-- end header -->

<!-- start navbar -->

<?php  
    include 'inc/navbar.php';
?>

<!-- end navbar -->


    <div class="user p-5">
        <div class="member-header border border-success rounded ">
            <h1 class="text-uppercase text-center text-danger">user profile</h1>
        </div>
    </div>

    <div class="container">
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data">
            <div class="form-row">

                <div class="form-group col-md-12">
                        
                        <div class="text-center">
                            <?php  
                                if (empty($image)) {                                      
                            ?>
                            <img src="images/log.png" style="width:200px; height: 200px; border-radius:50%; margin:10px;">
                            <?php }else{ ?>
                            <img src="../images2/uploads/<?php echo $image; ?>" style="width:200px; height: 200px; border-radius:50%; margin:10px;">
                            <?php } ?>
                            <input type="file" name="image" class="form-control">
                        </div>
                        
                </div>
                        <button name="profile" class="btn btn-primary">Change Profile Picture</button>
        </form>
    </div>      <br><br>


<?php  
                                        
                                        if (isset($_POST['profile'])) {
                                            $tmp_product_image  = $_FILES["image"]["tmp_name"];
                                            $product_image      = $_FILES["image"]["name"];

                                            if (!empty($product_image)) {
                
                                                $target_dir = "../images2/uploads/";
                                                $target_file = $target_dir . basename($product_image);
                                                $target_file = md5($target_file);
                                                $uploadOk = 1;
                                                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                                                $check = getimagesize($tmp_product_image);
                                                if($check !== false) {
                                                    $uploadOk = 1;
                                                    if (file_exists($target_file)) {
                                                        echo "Sorry, file already exists.";
                                                        $uploadOk = 0;
                                                    }

                                                    if ($uploadOk == 0) {
                                                        echo "Sorry, your file was not uploaded.";
                                                    
                                                    } else {
                                                        $uploadOk = 1;


                                                        $extension=end(explode(".", $product_image));
                                                        $prod = $target_file;
                                                        $newfilename=$prod .".".$extension;
                                                        move_uploaded_file($tmp_product_image, $target_dir.$newfilename);

                                                        $query = "UPDATE admin SET image = '$newfilename' WHERE id='$id'";
                                                        $result = mysqli_query($con,$query);
                                                        if ($result) {

                                                            echo "<script>alert('Profile Picture Updated Successfully')</script>";

                                                            echo "<script>window.location.href='profile.php'</script>";

                                                        }else{
                                                            echo "<script>alert('ERROR!!! While Updating')</script>";
                                                        }
                                                        
                                                    }
                                                } else {
                                                    echo "File is not an image.";
                                                    $uploadOk = 0;
                                                }
                                            }else{
                                                echo "<script>alert('Field Empty')</script>";
                                            }
                                        }

                                    ?>


    <div class="container">
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" name="name" class="form-control" required value="<?php echo $name; ?>">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Email</label>
                    <input type="text" name="email" class="form-control" required value="<?php echo $email; ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="text" name="password" class="form-control" required value="<?php echo $password; ?>">
                </div>
            </div>

            <button name="update_profile" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
    <br><br>

    <?php
                                    
                                        if(isset($_POST["update_profile"])) {

                                            

                                            $name      = mysql_real_escape_string($_POST['name']);
                                            $email     = mysql_real_escape_string($_POST['email']);
                                            $password  = mysql_real_escape_string($_POST['password']);
                                            
                                            if (!empty($name) || !empty($email) || !empty($password)) {

                                                $query = "UPDATE admin SET name ='$name',email ='$email', password ='$password' WHERE id = '$id'";
                                                $result = mysqli_query($con,$query);
                                                if ($result) {

                                                    echo "<script>alert('Profile Updated Successfully')</script>";
                                                    echo "<script>window.location.href='profile.php'</script>";

                                                }else{
                                                    echo "<script>alert('ERROR!!! While Updating Profile')</script>";
                                                }

                                            }else{
                                                echo "<script>alert('Field Must Not be Empty')</script>";
                                            }                                                  
                                        }
                                        
?>


    <!-- start footer -->

    <footer class="p-3">
        <p class="text-center text-light">Copyright ©Atik Mahmud 2019. All Right reserved.</p>

    </footer>

    <!-- end footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>