<?php
include 'connection.php';

$shopid=$_GET['id'];

mysqli_query($con,"UPDATE `shop_regtb` SET `status`='reject' WHERE  Shop_id='$shopid'");
// echo "<script>alert('delete successfully')</script>";
 echo "<script>window.location.href='view_shopreg.php';</script>";
?>