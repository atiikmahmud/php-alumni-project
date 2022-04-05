<?php

    if(isset($_SESSION['id']) ) {
       
        $get_user_id = $_SESSION['id'];
        $query = "SELECT * FROM users WHERE id='$get_user_id'";
        $result = mysqli_query($con,$query);

        while ($row=mysqli_fetch_array($result)) {
            $id              = $row['id'];
            $name            = $row['name'];
            $id_number       = $row['id_number'];
            $batch           = $row['batch'];
            $gender          = $row['gender'];
            $birthdate       = $row['birthdate'];
            $district        = $row['district'];
            $prjs            = $row['prjs'];
            $ptjs            = $row['ptjs'];
            $mobile          = $row['mobile'];
            $email           = $row['email'];
            $image           = $row['image'];
            $password        = $row['password'];
            
        }

    }
?>