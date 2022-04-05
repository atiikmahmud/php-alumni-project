
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