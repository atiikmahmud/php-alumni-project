<?php

    if(isset($_SESSION['id']) ) {
       
        $get_user_id = $_SESSION['id'];
        $query = "SELECT * FROM admin WHERE id='$get_user_id'";
        $result = mysqli_query($con,$query);

        while ($row=mysqli_fetch_array($result)) {
            $id              = $row['id'];
            $name            = $row['name'];
            $email           = $row['email'];
            $image           = $row['image'];
            $password        = $row['password'];
            
        }

    }
?>