<?php
include 'connection.php';
$data=mysqli_query($con,"select * from shop_regtb where status='approve'");


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
             <h3>Shops</h3>
            </div>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form action="">
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" class="table-warning">
                      <thead>
                        <tr>
                
                          <th>
                            Shop name
                          </th>
                          <th>
                            Location
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Phone No
                          </th>
                         
                        </tr>
                      </thead>
                      <tbody>
                   
        
        
        <?php
        while($row=mysqli_fetch_assoc($data))
        {
        ?>
     <tr>
    
    <td><?php echo $row['Shop_name'];?></td>
    <td><?php echo $row['Location'];?></td>
    <td><?php echo $row['Phone_no'];?></td>
    <td><?php echo $row['Email'];?></td>
    <!-- <td><a href="Approveshop_reg.php?id=<?php echo $row['Shop_id']?>">APPROVE</a></td>
    <td><a href="Rejectshop_reg.php?id=<?php echo $row['Shop_id']?>">REJECT</a></td> -->
    <!-- <td><a href="?shopid=<?php echo $row['Shop_id']?>">delete</td> -->
   
     </tr>

       <?php
        }
        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
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

