
<?php
include 'connection.php';



$uname=$_POST["user_name"];

$pwd=$_POST["password"];

 $data=mysqli_query($con,"SELECT van_regtb.Van_id,login_tb.login_id FROM `van_regtb` INNER JOIN login_tb on van_regtb.email=login_tb.user_name and login_tb.user_name='$uname' and login_tb.password='$pwd' and van_regtb.status='approve'");
 $row=mysqli_fetch_assoc(($data));
 if(mysqli_num_rows($data)>0)
 {
$a=$row['login_id'];
$date=Date("Y/m/d");
   mysqli_query($con,"INSERT INTO `attendence_tb`(`Van_id`, `Date`) VALUES ('$a','$date')");
    $response['vanid']=$row['Van_id'];
   
}
 else
 {
    $response['vanid']="failed";
 }
 echo json_encode($response);
 ?>
