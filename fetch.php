<?php
include "links.php";
include "connect.php";


?>


<div class="container">
            <table class="table table-bordered table-success">
                <thead >
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                   $sql = "select * from phpclass";
                   $con = mysqli_query($con,$sql);

                   while($res = mysqli_fetch_array($con)){
                    ?>
                    <tr>
                        <td><?php echo $res['id'] ?></td>
                        <td><?php echo $res['name'] ?></td>
                        <td><?php echo $res['phone'] ?></td>
                        <td><?php echo $res['email'] ?></td>
                        <td><?php echo $res['password'] ?></td>
                        <td><a href="delete.php?id=<?php echo $res['id'] ?>" class="btn btn-danger">Delete</a></td>
                        <td><a href="edit.php?id=<?php echo $res['id'] ?>" class="btn btn-warning">Edit</a></td>
                    </tr>
                <?php
                   }
                      
                    
                    ?>

                </tbody>

            </table>

</div>