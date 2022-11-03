<?php
include 'connection.php';

$wareid=$_GET['id'];

mysqli_query($con,"UPDATE `Ware_housetb` SET `status`='approve' WHERE  Ware_id='$wareid'");
// echo "<script>alert('delete successfully')</script>";
 echo "<script>window.location.href='view_warereg.php';</script>";
?>
