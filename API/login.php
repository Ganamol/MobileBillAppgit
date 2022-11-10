
<?php
include 'connection.php';



$uname=$_POST["user_name"];

$pwd=$_POST["password"];

 $data=mysqli_query($con,"SELECT login_tb.login_id FROM `van_regtb` INNER JOIN login_tb on van_regtb.email=login_tb.user_name and login_tb.user_name='$uname' and login_tb.password='$pwd'");
 $row=mysqli_fetch_assoc(($data));
 if(mysqli_num_rows($data)>0)
 {
    $response['message']=$row['login_id'];
   
}
 else
 {
    $response['message']="failed";
 }
 echo json_encode($response);
