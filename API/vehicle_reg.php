
<?php
include 'connection.php';





$vnum=$_POST["Van_num"];
$dname=$_POST["D_name"];
$dph=$_POST["D_ph"];
$demail=$_POST["email"];

 $data=mysqli_query($con,"INSERT INTO `van_regtb`(`Van_num`, `Driver_name`, `Driver_ph`, `status`, `email`) VALUES ('$vnum','$dname','$dph','register','$demail')");
 mysqli_query($con,"INSERT INTO `login_tb`(`user_name`, `password`, `user_type`) VALUES ('$demail','$dph','van')");
 if($data)
 {
    $response['message']="sucess";
    
   
}
 else
 {
    $response['message']="failed";
 }
 echo json_encode($response);
