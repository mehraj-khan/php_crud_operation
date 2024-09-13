<?php
include "links.php";
include "connect.php";

$id = $_GET['id'];
$query = "SELECT  * FROM phpclass WHERE id = $id";
$data = mysqli_query($con,$query);
$arr = mysqli_fetch_array($data);

if (isset($_POST['update']))
{
//     # code...
    $updateid = $_GET['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $update = "UPDATE phpclass SET name='$name',phone='$phone',email='$email',password='$password' WHERE id = $updateid";
    $conn = mysqli_query($con,$update);
    if($conn){
        header("location:fetch.php");
    }else{
        header("location:edit.php");
    }
}



?>


<div class="container">
<h1 class="text-center">Edit record</h1>
<form action="" method="post">
    <input type="text" name="name" placeholder="Enter user Name" class="form-control" value="<?php echo $arr['name'] ?>">
    <input type="text" name="phone" placeholder="Enter your Phone Number" class="form-control" value="<?php echo $arr['phone'] ?>">
    <input type="text" name="email" placeholder="Enter your Email" class="form-control" value="<?php echo $arr['email'] ?>">
    <input type="text" name="password" placeholder="Enter your password" class="form-control" value="<?php echo $arr['password'] ?>"><br>
    <input type="submit" class="btn btn-warning" name="update">
</form>
</div>
