<?php
session_start();
include 'connection.php';
if(isset($_POST['submit']))
{

  $pname=$_POST['pname'];
  
  $company=$_POST['company'];
  $date=$_POST['date'];
  $price=$_POST['price'];
  $quantity=$_POST['quantity'];
  $weight=$_POST['weight'];
  $batch=$_POST['batchno'];
  $_SESSION['b_id']=$batch;

  mysqli_query($con,"INSERT INTO `product_reg`( `Product_name`, `Company`, `Exp_date`, `Price`, `Quantity`, `Weight`, `Batch_no`) VALUES ('$pname','$company','$date','$price','$quantity','$weight','$batch')");
  
  $data=mysqli_query($con,"select * from product_reg where Batch_no='{$_SESSION['b_id']}'");
  $row=mysqli_fetch_assoc($data);
  
    if(mysqli_num_rows($data)>0)
    {
      
  mysqli_query($con,"INSERT INTO `stock_tb`(`product_id`, `stock`) VALUES ('$row[Product_id]','$quantity')");
  
  echo "<script>alert('insert successfully')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
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
    <!-- partial:partials/_navbar.html -->
    <?php
 include 'header.php';
 ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php
   include 'ware_sidebar.php';
   ?>
      <!-- partial -->
     <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark"></h4>
             <h1> Product Registration
                </h1>
            </div>
          </div>
          <form action="" method="POST">
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 
                  <p class="card-description">
                    </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Product Name</label>
                      <input type="text" name="pname" class="form-control" id="exampleInputName1" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Company</label>
                      <input type="text" name="company" class="form-control" id="exampleInputEmail3" placeholder="Enter Company">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Expiry date</label>
                      <input type="date" name="date" class="form-control" id="exampleInputPassword4" placeholder="Enter Expiry  date">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Price</label>
                      <input type="text" name="price" class="form-control" id="exampleInputPassword4" placeholder="Enter price">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Quantity</label>
                      <input type="text" name="quantity" class="form-control" id="exampleInputPassword4" placeholder="Enter Quantity">
                    </div>
                   
                    <div class="form-group">
                      <label for="exampleInputCity1">Weight</label>
                      <input type="text" name="weight" class="form-control" id="exampleInputCity1" placeholder="Enter Weight">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Batch No</label>
                      <input type="text" name="batchno" class="form-control" id="exampleInputCity1" placeholder=" Enter Batch No">
                    </div>
                   
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            </form>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
           
          </div>
          <!-- <span class="text-muted d-block text-center text-sm-left d-sm-inline-block mt-2">Distributed By: <a href="https://www.themewagon.com/" target="_blank">ThemeWagon</a></span>  -->
        </footer>
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
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

