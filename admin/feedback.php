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
            <h1 class="text-uppercase text-center text-danger">Feedback From Users</h1>
        </div>
    </div>

    <div class="table-info p-5">

        <div class="table-header">

        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Sender</th>
                    <th scope="col">Title</th>
                    <th scope="col">Feedback</th>
                    <th scope="col">Attachment</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM feedback ORDER BY id ASC";
                    $cnt=1;
                    $result = mysqli_query($con,$query);

                            if ($result) {
                                while($row = mysqli_fetch_assoc($result)){
                                    $id           = $row['id'];
                                    $sender       = $row['sender'];
                                    $title        = $row['title'];
                                    $feedbackdata = $row['feedbackdata'];
                                    $attachment   = $row['attachment'];
                                    

                        ?>
										<tr>
											<td><?php echo $cnt;?>.</td>
                                            <td><?php echo $sender; ?></td>
                                            <td><?php echo $title; ?></td>
											<td><?php echo $feedbackdata; ?></td>
											<td><?php echo $attachment; ?></td>
										</tr>

                                        <?php
                                        $cnt=$cnt+1;
                                         }} ?>
										
            </tbody>
        </table>
    </div>



    <!-- start footer -->
    
    <div class="mar pt-5">
        
    </div>

    <footer class="p-3 mt-3">
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
