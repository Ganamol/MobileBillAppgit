<?php
include 'connection.php';
$data=mysqli_query($con,"select * from Ware_Housetb where status='register'");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Warehouse Management</title>
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
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
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
   include 'sidebar.php';
   ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark"></h4>
             <h1>Welcome Admin</h1>
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
                            Warehouse Name
                          </th>
                          <th>
                            Location
                          </th>
                          
                          <th>
                            Phone
                          </th>
                          <th>
                        Email
                          </th>
                       
                        </tr>
                      </thead>
                      <tbody>
                   
        
        
        <?php
        while($row=mysqli_fetch_assoc($data))
        {
        ?>
    <tr>
    
    <td><?php echo $row['Ware_name'];?></td>
    <td><?php echo $row['Location'];?></td>
    <td><?php echo $row['Phone'];?></td>
    <td><?php echo $row['Email'];?></td>
    <!-- <a href="Approvevan_reg.php?id=<?php echo $row['Van_id']?>">APPROVE</a></ -->
    <td><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Approve/Reject
</button>
<!-- <button class="btn btn-success">Button</button> -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <center>   <h1 class="modal-title fs-5" id="exampleModalLabel">Approve Registration</h1></center>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center>
    <label for="">Warehouse Name:</label>  <label for=""><?php echo $row['Ware_name'];?></label><br><br>
    <label for="">Location:</label> <label for=""><?php echo $row['Location'];?></label><br><br>
    <label for="">Phone:</label> <label for=""><?php echo $row['Phone'];?></label><br><br>
    <label for="">Email:</label><label for=""><?php echo $row['Email'];?></label><br><br>
        
    <a href="Approveware_reg.php?id=<?php echo $row['Ware_id']?>" class="btn btn-danger">Approve</a>
    <a href="Rejectware_reg.php?id=<?php echo $row['Ware_id']?>" class="btn btn-danger">  Reject</a>
  </center>
      </div>
      
      </div>
    </div>
  </div>
</div><td>
  <!-- model -->

        </td>
    <!-- <td><a href="Rejectvan_reg.php?id=<?php echo $row['Van_id']?>">REJECT</a></td> -->
   
   
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

