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


<?php
                                    
    if(isset($_GET["uid"])) {
        include 'db/db.php';
        $id = $_GET['uid'];

        $query = "SELECT * FROM users WHERE id = '$id'";
                            $result = mysqli_query($con,$query);

                            if ($result) {
                                while($row = mysqli_fetch_assoc($result)){
                                    $id         = $row['id'];
                                    $name       = $row['name'];
                                    $id_number  = $row['id_number'];
                                    $batch      = $row['batch'];
                                    $district   = $row['district'];
                                    $image      = $row['image'];
                                    $gender     = $row['gender'];
                                    $prjs       = $row['prjs'];
                                    $ptjs       = $row['ptjs'];
                                    $mobile     = $row['mobile'];
                                    $email      = $row['email'];
                                    $birthdate  = $row['birthdate'];
                                        
                                }        
        
        }
        
    }else{
        echo "<script>window.location.href='users.php'</script>";
    }
    
?>

<div class="user p-5">
        <div class="member-header border border-success rounded ">
            <h1 class="text-uppercase text-center text-danger"><?php echo $name; ?>'s Profile</h1>
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
                            <img src="images/uploads/<?php echo $image; ?>" style="width:200px; height: 200px; border-radius:50%; margin:10px;">
                            <?php } ?>
                            
                        </div>
                        
                </div>
                       
        </form>
    </div>      <br><br>

<div class="container">
        <form>
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" name="name" class="form-control" required value="<?php echo $name; ?>" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">ID No.</label>
                    <input type="text" name="id_number" class="form-control" required value="<?php echo $id_number; ?>" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Batch No.</label>
                    <input type="email" name="batch" class="form-control" required value="<?php echo $batch; ?>"disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Home District</label>
                    <input type="text" name="district" class="form-control" required value="<?php echo $district; ?>" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Mobile</label>
                    <input type="text" name="mobile" class="form-control" required value="<?php echo $mobile; ?>" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Email</label>
                    <input type="text" name="email" class="form-control" required value="<?php echo $email; ?>" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Gender</label>
                    <input type="text" name="gender" class="form-control" required value="<?php echo $gender; ?>" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Birthdate</label>
                    <input type="date" name="birthdate" class="form-control" required value="<?php echo $birthdate; ?>" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Present Job Status</label>
                    <input type="text" name="prjs" class="form-control" required value="<?php echo $prjs; ?>" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Past Job Status</label>
                    <input type="text" name="ptjs" class="form-control" required value="<?php echo $ptjs; ?>" disabled>
                </div>

                
            </div>

        </form>
        <br><br>
    </div>



    <!-- start footer -->
    
    <div class="mar ">
        
    </div>

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
