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
            <h1 class="text-uppercase text-center text-danger">Notice for Users</h1>
        </div>
    </div>


<div class="container">

<div class="panel-body">
<form method="post" action="view_notice_file.php" class="form-horizontal" enctype="multipart/form-data">

<div class="form-group">
    <input type="hidden" name="sender" value="<?php echo $name; ?>">
    <label class="col-sm-2 control-label">Title<span style="color:red">*</span></label>
    <div class="col-sm-4">
    <input type="text" name="title" class="form-control" required>
    </div>

    <label class="col-sm-2 control-label">Notice<span style="color:red"></span></label>
    <div class="col-sm-4">
    <textarea class="form-control" rows="5" name="notice"></textarea>
    </div>
    </div>
</div>


<div class="form-group">
    <div class="col-sm-8 col-sm-offset-2">
        <button class="btn btn-primary" name="submit" type="submit">Send</button>
    </div>
</div>

</form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</div>

<br><br><br>

  


    <!-- start footer -->
    
  
    <footer class="p-3">
       <p class="text-center text-light bg-dark p-3">Copyright ©Atik Mahmud 2019. All Right reserved.</p>
        
    </footer>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body></html>
