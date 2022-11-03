<?php
session_start();
include 'connection.php';
if(isset($_POST['login']))
{

    $username=$_POST['username'];
    
    $password=$_POST['pwd'];
    // $user_type='admin'; 
    //  var_dump($password);
    // exit();
    $data=mysqli_query($con,"SELECT * FROM `login_tb` WHERE user_name='$username' and password='$password'");
    $row=mysqli_fetch_assoc($data);
  
    if(mysqli_num_rows($data)>0)
    {
      
          if($row['user_type']=="admin")
          {
              $_SESSION['login_id']=$row['id'];
               $id=$_SESSION['login_id'];
        header("location:myindex.php");
    }
    if($row['user_type']=="warehouse")
          {
              $_SESSION['login_id']=$row['id'];
               $id=$_SESSION['login_id'];
        header("location:ware_index.php");
    }
    }
    else
    {
      echo "<script>alert('not found')</script>";

}}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Regal Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css"/>
  <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars-o.css">
  <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <!-- <img src="../../images/logo-dark.svg" alt="logo"> -->
              </div>
              
              <h6 class="font-weight-light">Sign in</h6>
              <form class="pt-3" method="POST">
                <div class="form-group">
                  <input type="text" name="username"  class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="pwd"  class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                 <button type="submit" class="btn btn-primary btn-block" name="login">SIGN IN</button> 
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <br><br>
                  <a href="ware_registration.php" style="font-size: 1.2em">Warehouse Registration</a><a href="shop_registration.php" style="font-size: 1.2em">Shop Registration</a>
                </div>
                <div class="mb-2">
                
                </div>
                <div class="text-center mt-4 font-weight-light">
                 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

