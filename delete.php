<?php
include "connect.php";

$id = $_GET['id'];
$query = "DELETE FROM phpclass WHERE id = $id";

$res = mysqli_query($con,$query);
header("location:fetch.php")

?>