<?php

session_start();
if (!isset($_SESSION["SESSION_EMAIL_ADMIN"])) {
    header("Location: index.php");
}

        include 'con2.php';

        $clientResult = mysqli_query($con, "SELECT * FROM users");
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
                    <h1>LIST OF CLIENTS</h1>
                        <p>The following are the list of registered patients:
                    </div>
                </div>
            </div>


            <!--SEARCH BAR-->
            <div class="col-lg-7 col-sm-6 mt-4 mb-3">
            <form>
                
                <div class="input-group mb-3">
                  <label class="mt-2 mx-2" style="font-size:20px;">SEARCH:</label>
                  <input type="text" name="search" id="search" class="form-control" placeholder="Input your search here">
                  
                  
                </div>
                
            </form>
            </div><!--EOF SEARCH BAR-->
    <!
    <div class="bs-example container" data-example-id="striped-table">
  <table class="table table-striped table-bordered table-hover" id="clientTable">
   
    <thead>
      <tr>
        <th>Patient ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $sqlA6 = "SELECT * FROM users ORDER BY userID";
      $resultA6 = mysqli_query($con, $sqlA6);

      while($rows = mysqli_fetch_assoc($resultA6))
      {
    ?>
      <tr>
        <th scope="row"><?php echo $rows['userID']; ?></th>
        <td><?php echo $rows['firstname']; ?></td>
        <td><?php echo $rows['lastname']; ?></td>
        <td><?php echo $rows['email']; ?></td>
      </tr>
    <?php 
       } 
    ?><!--EOF Fetching data-->
      
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

<script type="text/javascript">
  $(document).ready(function(){
    $('#search').keyup(function(){
      search_table($(this).val());
    });
    function search_table(value){
      $('#clientTable tr').each(function(){
        var found='false';
        $(this).each(function(){
          if($(this).text().toLowerCase().indexOf(value.toLowerCase())>=0)
          {
            found='true';
          }
        });
        if(found=='true')
        {
          $(this).show();
        }
        else{
          $(this).hide();
        }
      });
    }
  });
</script>
    
</body>
</html>