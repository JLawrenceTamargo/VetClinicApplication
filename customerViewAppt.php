<?php

session_start();
if(!isset($_SESSION["SESSION_EMAIL"])){
    header("Location: customerLogin.php");
}
include_once 'conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <!-- custom css -->
    <link rel="stylesheet" href="assets/style.css" />
  
    <!--FONTS
    font-family: 'Overpass', sans-serif;
    font-family: 'Permanent Marker', cursive;
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass&family=Permanent+Marker&display=swap" rel="stylesheet">



    <title>Fur and Tails</title>

</head>
<body>
<!--NAVBAR-->
<nav class="navbar fixed-top navbar-expand-lg bg-nav p-md-3">
    <div class="container">
        <a href="#" class="navbar-brand text-white ms-2">Fur and Tails Animal Clinic</a>
        <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false">
        <span class="navbar-toggler-icon text-white"><i class="bx bx-menu"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="customer.php" class="nav-link text-white">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="addPet.php" class="nav-link text-white">ADD PET</a>
                </li>
                <li class="nav-item">
                    <a href="bookAppt.php" class="nav-link text-white">BOOK AN APPOINTMENT</a>
                </li>
                <li class="nav-item">
                    <a href="customerView.php" class="nav-link text-white">VIEW ACCOUNT</a>
                </li>
                <li class="nav-item">
                    <a href="customerViewAppt.php" class="nav-link text-white">VIEW APPOINTMENTS</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link text-white">LOG-OUT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    

        <div class="container py-5">
            <div class="table-fluid bg-dark text-light mt-5 p-3">
                    <h1 class="heading">Appointments</h1>
                    <table class="table text-white">
                        <thead>
                            <th>Appointment ID</th>
                            <th>Date of Appointment</th>
                            <th>Time of Appointment</th>
                            <th>Service Availed</th>
                            <th>Pet Name</th>
                            <th>Status</th>
                            <th>Remarks</th>
                        </thead>
                        <tbody>
                        <?php
                            $sql2 = "SELECT * FROM appointment WHERE patientEmail='{$_SESSION["SESSION_EMAIL"]}'";
                            $result5 = mysqli_query($con, $sql2);

                            
                                while($rows = mysqli_fetch_assoc($result5))
                                {
                            ?>
                           
                            <tr><td><?php echo $rows['apptID']; ?></td>
                                <td><?php echo $rows['dateAppt']; ?></td>
                                <td><?php echo $rows['timeAppt']; ?></td>
                                <td><?php echo $rows['serviceAvail']; ?></td>
                                <td><?php echo $rows['patientPet']; ?></td>
                                <td><?php echo $rows['status']; ?></td>
                                <td><?php echo $rows['remarks']; ?></td>
                            <?php 
                                
                            } ?><!--EOF Fetching data-->
                        </tbody>
                    </table>    
            </div>


            <div class="row mt-5">
                <h3 class="text-warning text-center">If you want to cancel the appointment, kindly contact us thru 02-8-2881729 or via email: furandtails@gmail.com</h3>
            </div>
        </div>

                
      
 



     <!-- Footer-->
     <footer class="footer py-3 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; 2021 - Fur and Tails Animal Clinic</p></div>
        </footer>
                            </div>
         <!--BOOTSRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  





</body>
</html>