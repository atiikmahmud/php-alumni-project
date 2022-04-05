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
            <h1 class="text-uppercase text-center text-danger">alumni members</h1>
        </div>
    </div>

    <div class="table-info p-5">

        <div class="table-header">

        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">ID No.</th>
                    <th scope="col">Batch No.</th>
                    <th scope="col">District</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Present Job Status</th>
                    <th scope="col">Past Job Status</th>
                    <th scope="col">Account</th>
                    <th scope="col">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php

                    $query = "SELECT * FROM users where status='1' ORDER BY id ";
                    $cnt=1;
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
                                    $status     = $row['status'];


                        ?>
                <tr>
                                            <td><?php echo $cnt;?>.</td>
                                            <td>



                                                <?php  
                                if (empty($image)) {                                      
                            ?>
                            <img src="../images/log.png" style="width:50px; height: 50px; border-radius:50%;"/>
                            <?php }else{ ?>
                            <img src="../images/uploads/<?php echo $image; ?>" style="width:50px; height: 50px; border-radius:50%;"/>
                            <?php } ?>

                                            </td>
                                            <td><?php echo $name; ?></td>
                                            <td><?php echo $id_number; ?></td>
                                            <td><?php echo $batch; ?><sup>th</sup></td>
                                            <td><?php echo $district; ?></td>
                                            <td><?php echo $email; ?></td>
                                            <td><?php echo $gender; ?></td>
                                            <td><?php echo $birthdate; ?></td>
                                            <td><?php echo $mobile; ?></td>
                                            <td><?php echo $prjs; ?></td>
                                            <td><?php echo $ptjs; ?></td>
                                            <td>
                                                <a href="users_status.php?uid=<?php echo $id ?>&ustatus=<?php echo $status; ?>">
                            <?php  
                                if ($status == 0) {
                                    echo "Disabled";
                                }elseif ($status == 1) {
                                    echo "Enabled";
                                }
                            ?>
                        </a>
</td>
<td>
    <a href="users_delete.php?uid=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
</td>
                                                                               
											
										<?php

                                        $cnt=$cnt+1;
                                         }} ?>
            </tbody>
        </table>
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
