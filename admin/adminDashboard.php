<?php

session_start();
if (!isset($_SESSION["SESSION_EMAIL"])) {
    header("Location: index.php");
}

        include 'con2.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <!-- bootstrap 5 css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <!-- BOX ICONS CSS-->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <!-- custom css -->
  <link rel="stylesheet" href="adminDash.css" />
  
    <!--FONTS
    font-family: 'Overpass', sans-serif;
    font-family: 'Permanent Marker', cursive;
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass&family=Permanent+Marker&display=swap" rel="stylesheet">

    <title>Admin Dashboard</title>
</head>
<body>

<div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Fur and Tails Animal Clinic
                    </a>
                </li>
                <li>
                    <a href="adminDashboard.php">Dashboard</a>
                </li>
                <li>
                    <a href="listOfAppt.php">List of Appointments</a>
                </li>
                <li>
                    <a href="listClients.php">List of Clients</a>
                </li>
                <li>
                    <a href="addAdmin.php">Add Admin</a>
                </li>
                <li>
                    <a href="logoutAdmin.php">Log-Out</a>
                </li>
               
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class='bx bx-menu ibox'></i></a>
                    <h1>ADMIN DASHBOARD</h1>
                    <hr class="mb-5"/>
                        <h3>PENDING APPOINTMENT REQUEST</h3>
                    </div>
                </div>
            </div>
        

<div class="col-lg-10 col-sm-6 text-center" data-example-id="striped-table">
  <table class="table table-striped table-bordered table-hover">
   
    <thead>
      <tr>
        <th>User ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Status</th>
        <th>APPOINTMENT</th>
      </tr>
    </thead>
    <tbody>
    <?php
          $sqlA3 = "SELECT * FROM appointment WHERE status='Pending' GROUP BY userID ORDER BY apptID";
          $resultA3 = mysqli_query($con, $sqlA3);

          while($rows = mysqli_fetch_assoc($resultA3))
          {
              $uid = $rows['userID'];
   ?>
      <tr>
     
        <td scope="row"><?php echo $rows['userID']; ?> </td>
        <td><?php echo $rows['patientFirstname']; ?></td>
        <td><?php echo $rows['patientLastname']; ?></td>
        <td><?php echo $rows['status']; ?></td>
        
        <td><button class="btn btn-lg" style="background-color: #444444!important; color:#EDEDED!important;"><a style="text-decoration:none; color:#EDEDED!important;" href="viewReqPending.php?reqID=<?php echo $rows['userID']; ?>">VIEW</a></button></td>
      </tr>




      
      <?php } ?>
       
    </tbody>
    
  </table>
</div>



<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-lg-12">
          <h3>LIST OF APPROVED/CANCELLED APPOINTMENTS</h3>
        </div>
    </div>
 </div>

<div class="col-lg-10 col-sm-6 text-center" data-example-id="striped-table">
  <table class="table table-striped table-bordered table-hover">
   
    <thead>
      <tr>
        <th>User ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Status</th>
        <th>Remarks</th>
        <th>APPOINTMENT</th>
      </tr>
    </thead>
    <tbody>
    <?php
          $sqlA3 = "SELECT * FROM appointment WHERE status='Approved' OR status='Cancelled' GROUP BY userID ORDER BY apptID";
          $resultA3 = mysqli_query($con, $sqlA3);

          while($rows = mysqli_fetch_assoc($resultA3))
          {
              $uid = $rows['userID'];
   ?>
      <tr>
        <td scope="row"><?php echo $rows['userID']; ?> </td>
        <td><?php echo $rows['patientFirstname']; ?></td>
        <td><?php echo $rows['patientLastname']; ?>
        <td><?php echo $rows['status']; ?>
        <td><?php echo $rows['remarks']; ?>
        
        <td><button class="btn btn-lg" style="background-color: #444444!important; color:#EDEDED!important;"><a style="text-decoration:none; color:#EDEDED!important;" name="viewBTN" href="viewReqAppt.php?reqID=<?php echo $rows['userID']; ?>">VIEW</a></button></td>
      </tr>




      
      <?php } ?>
       
    </tbody>
    
  </table>
</div>








</div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!--BOOTSRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
    </script>


    
</body>
</html>