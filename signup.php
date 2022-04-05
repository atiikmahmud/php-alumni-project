<?php
include('function/signup_script.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='images/vu-title-logo.png' rel='icon' type='image/x-icon' />

    <title>Alumni Registration Form</title>

    <style>

        *{
            margin: 0;
            padding: 0;
        }
        
        body{
            background-color: white;
            
        }
        .header{
            background-color: white;
            width: 90%;
            display: block;
            margin: auto;
            border-radius: 0px 0px 10px 10px;
            margin-bottom: 50px;
            box-shadow: 5px 5px 5px 5px #8888;
        }
        .login{
            background-color: white;
            width: 90%;
            display: block;
            margin: auto;
            border-radius: 10px;
            margin-top: 50px;
            margin-bottom: 50px;
            box-shadow: 5px 5px 5px 5px #8888;
            
        }
        .footer{
            background-color: white;
            width: 90%;
            display: block;
            margin: auto;
            border-radius: 10px 10px 0px 0px;
            margin-top: 50px;
            box-shadow: 5px 0px 5px 5px #8888;
        }
        
         h2{
            text-align: center;
           
        }
        .login form{
            padding: 5%;
        }
        form img{
            display: block;
            margin: auto;
        }
        
        h2{
            color: #57AABB;
            padding-bottom: 20px;
            font-size: 20px;
        }
        
        @media screen and (max-width: 480px){
           
    
        }
        
    </style>
</head>

<body>
    <div class="container">


        <div class="header">
            <h5 class="text-center p-4">CSE Alumni Association of Varendra University</h5>
        </div>


        <div class="login">


            <form method="POST">
                <img src="images/log.png" alt="" height="200px" width="200px">
                <h2> Registration</h2>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name..." required>
                </div>

                <div class="form-group">
                    <label for="">ID Number</label>
                    <input type="text" class="form-control" name="id_number" placeholder="Enter your id number 9 chracter..." required>
                </div>

                <div class="form-group">
                    <label for="">Batch No.</label>
                    <input type="text" class="form-control" name="batch" placeholder="Enter your batch no..." required>
                </div>

                <div class="form-group">
                    <label for="">Gender</label><br>
                    <input type="radio" name="gender" value="Male"> Male<br>
                    <input type="radio" name="gender" value="Female"> Female<br>
                </div>

                <div class="form-group">
                    <label for="">Birthdate</label>
                    <input type="Date" class="form-control" name="birthdate" required>
                </div>

                <div class="form-group">
                    <label for="">District</label>
                    <input type="Text" class="form-control" name="district" placeholder="Enter your district name..." required>
                </div>

                <div class="form-group">
                    <label for="">Present Job Status</label>
                    <input type="text" class="form-control" name="prjs" placeholder="Enter your present jos status..." required>
                </div>

                <div class="form-group">
                    <label for="">Past Job Status</label>
                    <input type="text" class="form-control" name="ptjs" placeholder="Enter your past job status..." required>
                </div>

                <div class="form-group">
                    <label for="">Mobile No.</label>
                    <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile no..." required>
                </div>

                <div class="form-group">
                    <label for="">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter your valid email address..." required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter your password..." required>
                </div>

                <div class="form-group">                    
                    <input type="hidden" class="form-control" name="status" value="0">
                </div>

                <small id="emailHelp" class="form-text text-muted"><a href="login.php">Login</a> or <a href="login.php">Home</a></small> <br>

                <button type="submit" class="btn btn-primary" name="signup">Submit</button>
            </form>
        </div>

        <div class="footer">
            
            <p class="text-center p-4">Developed by Atik Mahmud<br>www.facebook.com/atiikmahmud</p>
            
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>