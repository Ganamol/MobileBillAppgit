
<?php
include 'connection.php';





$vid=$_POST["Van_id"];
$sid=$_POST["shop_id"];
$mpay=$_POST["modeofpay"];
$amount=$_POST["amount"];
$date=date("Y/m/d");
 $data=mysqli_query($con,"INSERT INTO `bill`(`Van_id`, `shop_id`, `modeofpay`, `amount`, `date`) VALUES ('$vid','$sid','$mpay','$amount','$date')");
;
 if($data)
 {
    $response['message']="sucess";
    
   
}
 else
 {
    $response['message']="failed";
 }
 echo json_encode($response);
