    <header>
        <h1 class="text-uppercase text-center p-2">ALUMNI ASSOCIATION ADMIN PANEL</h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="dashboard.php">
            <img src="images/logo.png" width="30" height="40" alt="varsity-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php?ref=Dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php?ref=Profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="users.php?ref=Members">Members</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="chat.php?ref=Message">Message</a>
                </li>
                
                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Notification
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="view_notice.php?ref=Notification">Notification</a>
          <a class="dropdown-item" href="send_notice.php?ref=Notification">View Notification</a>
        </div>
      </li>
                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Archive
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="archive.php?ref=Archive">Archive</a>
          <a class="dropdown-item" href="view_archive.php?ref=View_Archived">View Archived</a>
        </div>
      </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="feedback.php?ref=Feedback">Feedback</a>
                </li> 
                <li class="nav-item">
                    <?php

                    $query = "SELECT COUNT(id) AS total FROM users where status = '0'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $num_rows = $values['total']; 
                    
                        ?>
                    <a class="nav-link" href="new_user.php?ref=new_user">New User(<?php echo $num_rows; ?>)</a>
                </li>  
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Add Admin User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>             

            </ul>

        </div>
<form class="form-inline">
            <?php  
                                if (empty($image)) {                                      
                            ?>
                            <img src="images/log.png" alt="" height="40px" width="40px" class="rounded-circle mr-2"><b><?php echo $name ?></b>
                            <?php }else{ ?>
                            <img src="../images2/uploads/<?php echo $image; ?>" alt="" height="40px" width="40px" class="rounded-circle mr-2"><b><?php echo $name; ?></b>
                            <?php } ?>
  </form>
    </nav>