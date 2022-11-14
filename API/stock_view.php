

<?php
include 'connection.php';


$vid=$_POST["Van_id"];


 $data=mysqli_query($con,"SELECT van_stock.Quantity,product_reg.Product_name,product_reg.Price FROM `van_stock` INNER JOIN product_reg ON product_reg.Product_id=van_stock.product_id where Van_id='$vid'");

 $list=array();
 if(mysqli_num_rows($data)>0)
 {
while($row=mysqli_fetch_assoc(($data)))
{
   
    $myarray['pname']=$row['Product_name'];
    $myarray['Quantity']=$row['Quantity'];
    $myarray['Price']=$row['Price'];
 
    array_push($list,$myarray);
}
}
 else
 {
    $myarray['message']="failed";
    array_push($list,$myarray);

 }
 echo json_encode($list);
