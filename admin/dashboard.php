<!-- start header -->

<?php  
    include 'inc/header.php';
?>

<!-- end header -->

<?php 

header("Refresh:5");

?>

<!-- start navbar -->

<?php  
    include 'inc/navbar.php';
?>

<!-- end navbar -->
    
<body>

	<div class="user p-5">
        <div class="member-header border border-success rounded ">
            <h1 class="text-uppercase text-center text-danger">dashboard</h1>
        </div>
    </div>
<div class="deshboard">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			<div class="card text-center">
        <?php

                    $query = "SELECT COUNT(id) AS total FROM users where status = '1'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $num_rows = $values['total']; 
                    
                        ?>
  				<div class="card-header">
    				Total Users
 				 </div>
  			<div class="card-body">
    		<h1 class="card-title"><?php echo $num_rows; ?></h1> <br><br>

    			
    		<a href="users.php" class="btn btn-primary">Go Users</a>
  			</div>
 			 <div class="card-footer text-muted">
    			Users
  			</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card text-center">
        <?php

                    $query = "SELECT COUNT(id) AS total FROM users where status = '0'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $num_rows = $values['total']; 
                    
                        ?>
  				<div class="card-header">
    				Total User Request
 				 </div>
  			<div class="card-body">
    		<h1 class="card-title"><?php echo $num_rows; ?></h1> <br><br>
    		<a href="new_user.php" class="btn btn-primary">Requests</a>
  			</div>
 			 <div class="card-footer text-muted">
    			New Users
  			</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card text-center">
        <?php

                    $query = "SELECT COUNT(id) AS total FROM users_notice"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $num_rows = $values['total']; 
                    
                        ?>
  				<div class="card-header">
    				Total Notifications
 				 </div>
  			<div class="card-body">
    		<h1 class="card-title"><?php echo $num_rows; ?></h1> <br><br>
    		<a href="#" class="btn btn-primary">Go Notifications</a>
  			</div>
 			 <div class="card-footer text-muted">
    			Notifications
  			</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card text-center">
        <?php

                    $query = "SELECT COUNT(id) AS total FROM archive"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $num_rows = $values['total']; 
                    
                        ?>
  				<div class="card-header">
    				Total Archives
 				 </div>
  			<div class="card-body">
    		<h1 class="card-title"><?php echo $num_rows; ?></h1> <br><br>
    		<a href="view_archive.php" class="btn btn-primary">Go Archives</a>
  			</div>
 			 <div class="card-footer text-muted">
    			Archives
  			</div>
			</div>
		</div>


		</div>
	</div>
</div>	
    
<br>


<!-- start footer -->

<?php  
    include 'inc/footer.php';
?>

 <!-- end footer -->