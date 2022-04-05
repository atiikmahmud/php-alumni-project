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
            <h1 class="text-uppercase text-center text-danger">messaging with alumni members</h1>
        </div>
    </div>

    <div class="container">
        <div class="row pb-3">
            <?php
                    $query = "SELECT * FROM chatting ORDER BY id ASC";
                            $result = mysqli_query($con,$query);

                            if ($result) {
                                while($row = mysqli_fetch_assoc($result)){
                                    $id         = $row['id'];
                                    $sender     = $row['sender'];
                                    $msg        = $row['msg'];
                                    

                        ?>
            <div class="col-md-3">
                <div class="msg">       
                 <p class="border border-success rounded-pill p-3 mb-2 bg-primary text-white"><?php echo $sender; ?></p>
                </div>
            </div>
            <div class="col-md-9">
                <p class="border border-success rounded-pill p-3 mb-2 bg-secondary text-white"><?php echo $msg; ?></p>
            </div>
            <?php }} ?>
        </div>

        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" >
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="hidden" name="sender" class="form-control" value="<?php echo $name; ?>">
                    <textarea name="msg" class="form-control" rows="2" placeholder="write your message..."></textarea>
                </div>

            </div>

            <button name="send" class="btn btn-primary">Send</button>
        </form>
    </div>

    <?php
                                    
        if(isset($_POST["send"])) {                                           

            $msg      = mysql_real_escape_string($_POST['msg']);
            $sender   = mysql_real_escape_string($_POST['sender']);

            if (!empty($name) || !empty($email) || !empty($gender) || !empty($district) || !empty($prjs) || !empty($ptjs) || !empty($mobile) || !empty($birthdate)) {

              $sql = "INSERT INTO chatting(sender,msg) values('$sender','$msg')";
              $result = mysqli_query($con,$sql);

              if ($result) {

                                                    
                                                    echo "<script>window.location.href='chat.php'</script>";

                                                }else{
                                                    echo "<script>alert('ERROR!!! ')</script>";
                                                }
                                                
              }
              }                                                                            
                                        
    ?>


    <!-- start footer -->

    <div class="mar pt-5">

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
