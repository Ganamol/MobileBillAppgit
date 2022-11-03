<?php
include 'connection.php';

$vanid=$_GET['id'];

mysqli_query($con,"UPDATE `van_regtb` SET `status`='approve' WHERE  Van_id='$vanid'");
// echo "<script>alert('delete successfully')</script>";
 echo "<script>window.location.href='view_vanreg.php';</script>";
?>
