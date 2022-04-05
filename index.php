<?php 
include('db/db.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- title logo -->
    <link href='images/vu-title-logo.png' rel='icon' type='image/x-icon' />

    <!-- custom css-->
    <link rel="stylesheet" href="css/style.css">

    <title>VU Alumni</title>
</head>

<body>
    <!-- start navbar -->

    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="images/vu-logo.png" width="300" height="60" class="d-inline-block align-top" alt="">

        </a>
        <ul class="nav justify-content-start">
            <li class="nav-item">
                <a class="nav-link active h3 text-danger" href="index.php">CSE ALUMNI ASSOCIATION OF VARENDRA UNIVERSITY</a>
            </li>
        </ul>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#photo-gallery">Photo Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>

        </ul>
    </nav>
    <!-- End Navbar -->

    <!-- start slider -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/slider/slide-3.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider/slide-4.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider/slide-1.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider/slide-2.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider/slide-5.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- end slider -->

    <!-- start text -->

    <div class="text p-5" style="font-family: Century">
        <p>
            The CSE department of Varendra University is one of the reputed and pioneer departments in computer engineering education in the eastern part of Bangladesh. From the establishment year 2012, it has produced 10 batches consisting more than 400 students. Most of the graduates are engaged in various fields of IT sector. The purpose of formation of this alumni association is to bring this large number of students in one platform. <br /> <br />

            The main objectives of this alumni association is to build active communication network among all the present and ex-students of the CSE department through various programs and to contribute in the academic development of the CSE department. Moreover, it will consequently bring economic development of the country through the dissemination of new concepts in the relevant field.<br /> <br />

            Our Goals:
            <ul>
                <li>To build up relationship among the members of the association through educational, cultural, social and welfare programs.</li>
                <li>
                    To unite the members of the association in the bonds of friendship, fellowship and mutual understanding through arranging reunion, picnic, tour, sports etc.
                </li>
                <li>
                    To help preparing students for the global job market.
                </li>
                <li>
                    To highlight the problems and prospects of the CSE academics and professionals through different media, journals, publications, etc.
                </li>
                <li>
                    To encourage efficiency and promote high ethical standard in CSE profession.
                </li>
            </ul>

        </p>
    </div>

    <!-- end text -->

 <!-- start alumni member -->



    <div class="member p-5">
        <div class="member-header border border-success rounded">
            <h1 class="text-uppercase text-center text-danger">alumni members</h1>
        </div>
        <div class="member-details pt-5">
            <div class="member-info">

                <div class="row">
                    <?php
                    $query = "SELECT * FROM users ORDER BY id ASC LIMIT 8";
                            $result = mysqli_query($con,$query);

                            if ($result) {
                                while($row = mysqli_fetch_assoc($result)){
                                    $id         = $row['id'];
                                    $name       = $row['name'];
                                    $id_number  = $row['id_number'];
                                    $batch      = $row['batch'];
                                    $district   = $row['district'];
                                    $image      = $row['image'];
                        ?>
                    <div class="col-md-3 pb-3">
                        <div class="profile border rounded">
                            <div class="imgage text-center p-3">
                                <?php  
                                if (empty($image)) {                                      
                            ?>
                            <img class="border rounded-circle" src="images/log.png" alt="member-photos" height="200px" width="200px">
                            <?php }else{ ?>
                            <img class="border rounded-circle" src="images/uploads/<?php echo $image; ?>" alt="member-photos" height="200px" width="200px">
                            <?php } ?>
                            </div>
                            <div class="title">
                                <div class="profile-details pl-4">
                                    <h5><strong>Name: </strong><?php echo $name;?></h5>
                                    <h5><strong>ID: </strong><?php echo $id_number;?></h5>
                                    <h5><strong>Batch: </strong><?php echo $batch;?><sup>th</sup></h5>
                                    <h5><strong>District: </strong><?php echo $district;?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>

                    </div>
                </div>
            </div>
    </div>

    <!-- end alumni member -->  

    <!-- start photo gallery -->

    <div id="photo-gallery" class="photo-gallery p-5">
        <div class="member-header border border-success rounded">
            <h1 class="text-uppercase text-center text-danger">photo gallery</h1>
        </div>

        <div class="photos">
            <div class="row pt-3">
                <div class="col-md-3 pt-3">
                    <div class="image ">
                        <a href="images/gallery/pic%20(1).JPG" target="_blank">
                            <img class="border rounded" src="images/gallery/pic%20(1).JPG" alt="image" height="200" width="300">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 pt-3">
                    <div class="image ">
                        <a href="images/gallery/pic%20(2).JPG" target="_blank">
                            <img class="border rounded" src="images/gallery/pic%20(2).JPG" alt="image" height="200" width="300">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 pt-3">
                    <div class="image ">
                        <a href="images/gallery/pic%20(3).JPG" target="_blank">
                            <img class="border rounded" src="images/gallery/pic%20(3).JPG" alt="image" height="200" width="300">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 pt-3">
                    <div class="image ">
                        <a href="images/gallery/pic%20(4).JPG" target="_blank">
                            <img class="border rounded" src="images/gallery/pic%20(4).JPG" alt="image" height="200" width="300">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 pt-3">
                    <div class="image ">
                        <a href="images/gallery/pic%20(5).JPG" target="_blank">
                            <img class="border rounded" src="images/gallery/pic%20(5).JPG" alt="image" height="200" width="300">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 pt-3">
                    <div class="image ">
                        <a href="images/gallery/pic%20(6).JPG" target="_blank">
                            <img class="border rounded" src="images/gallery/pic%20(6).JPG" alt="image" height="200" width="300">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 pt-3">
                    <div class="image ">
                        <a href="images/gallery/pic%20(7).JPG" target="_blank">
                            <img class="border rounded" src="images/gallery/pic%20(7).JPG" alt="image" height="200" width="300">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 pt-3">
                    <div class="image ">
                        <a href="images/gallery/pic%20(8).JPG" target="_blank">
                            <img class="border rounded" src="images/gallery/pic%20(8).JPG" alt="image" height="200" width="300">
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- end photo gallery -->

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
