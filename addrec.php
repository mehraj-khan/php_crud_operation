<?php
include "links.php";
include "connect.php";
if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $psd = $_POST['password'];
 $insert = "INSERT INTO `phpclass`(`name`, `phone`, `email`, `password`) VALUES ('$name','$phone','$email','$psd')";
 $rem = mysqli_query($con,$insert);
 if($rem){
    header("location:fetch.php");
 }else{
    header("location:addrec.php");
 }
}
?>


<div class="container">
    <div class="row">
        <div class="col">
            <form method="post">
            <input type="text" class="form-control" name="name" placeholder="Enter your name"><br><br>
            <input type="text" class="form-control" name="phone" placeholder="Enter your phone"><br><br>
            <input type="text" class="form-control" name="email" placeholder="Enter your email"><br><br>
            <input type="text" class="form-control" name="password" placeholder="Enter your password"><br><br>
            <input type="submit" class="btn btn-primary" name="submit" value="submit">
            </form>
        </div>
    </div>
</div>