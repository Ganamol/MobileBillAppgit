
<?php
include 'connection.php';





$vid=$_POST["Van_id"];
$sid=$_POST["shop_id"];
$pid=$_POST["product_id"];
$qua=$_POST["quantity"];
$date=$_POST["date"];
$a=date("Y/m/d");
 $data=mysqli_query($con,"INSERT INTO `shop_stock`(`Van_id`, `shop_id`, `product_id`, `quantity`, `date`) VALUES ('$vid','$sid','$pid','$qua','$a')");
//  mysqli_query($con,"INSERT INTO `login_tb`(`user_name`, `password`, `user_type`) VALUES ('$demail','$dph','van')");
 if($data)
 {
    $response['message']="sucess";
    
   
}
 else
 {
    $response['message']="failed";
 }
 echo json_encode($response);
