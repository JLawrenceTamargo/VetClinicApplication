<?php

session_start();
if (!isset($_SESSION["SESSION_EMAIL"])) {
    header("Location: index.php");
}


    
    if(isset($_POST["RegisterAdmin"])){
        include 'con2.php';

        $username= mysqli_real_escape_string($con, $_POST['username']);
        $email= mysqli_real_escape_string($con, $_POST['email']);
        $password= mysqli_real_escape_string($con, $_POST['password']);
        $confirmPassword= mysqli_real_escape_string($con, $_POST['confirmPassword']);


        if(mysqli_num_rows(mysqli_query($con, "SELECT * FROM adminUsers WHERE email='{$email}'"))>0) {
            echo "<script>alert('{$email} - This email has already taken.');</script>";
        }
        else {
            if($password === $confirmPassword) {
                $hashedP= md5($password);
                $queryA1 = "INSERT INTO adminUsers (username, password, email) VALUES ('{$username}', '{$hashedP}', '{$email}')";
                $resultA1 = mysqli_query($con, $queryA1);

                if($resultA1)
                {
                    header("Location: adminDashboard.php");
                }
                else{
                    echo '<script>Error: ".$queryA1.mysqli_error($con)."</script>';
                }
            }
            else {
                echo "<script> alert('Password and Confirm Password do not match!'); </script>";
            }
        }
    }

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

<!--ADD ADMIN-->
<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class='bx bx-menu ibox'></i></a>
                    <h1>ADD ADMIN</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                    </div>
                </div>
            </div>
</div>

    <!--REGISTRATION FORM-->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="card-titl bg-primary text-white mt-3">
                        <h3 class="text-center py-3">Registration Form</h3>
                        <p><a href="logoutAdmin.php"  class="text-white">LOG-OUT</a></p>
                    </div>

                    

                    <div class="card-body">
                        
                        <form action="" method="post">

                            <input type="text" name="username" placeholder="Enter Username here" class="form-control mt-3">
                            <input type="email" name="email" placeholder="Enter Email here" class="form-control mt-3">
                            <input type="password" name="password" placeholder="Enter Password here" class="form-control mt-3">
                            <input type="password" name="confirmPassword" placeholder="Confirm Password here" class="form-control mt-3">
                           
                            <button class="btn btn-success mt-3" name="RegisterAdmin">REGISTER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--EOF REGISTRATION FORM-->


</div><!--EOF MAIN CONTAINER-->
    

    <!--BOOTSRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
    </script>


<!--EOF ADD ADMIN-->
    
</body>
</html>