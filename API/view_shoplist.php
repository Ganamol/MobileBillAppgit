
<?php
include 'connection.php';





 $data=mysqli_query($con,"SELECT * FROM `shop_regtb`");

 $list=array();
 if(mysqli_num_rows($data)>0)
 {
while($row=mysqli_fetch_assoc(($data)))
{
   
    $myarray['shoplist']=$row['Shop_name'];
    $myarray['Location']=$row['Location'];
    $myarray['Email']=$row['Email'];
    $myarray['Phone_no']=$row['Phone_no'];
    array_push($list,$myarray);
}
}
 else
 {
    $myarray['message']="failed";
    array_push($list,$myarray);

 }
 echo json_encode($list);
