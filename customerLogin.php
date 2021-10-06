<?php

session_start();
if (isset($_SESSION["SESSION_EMAIL"])) {
    header("Location: customer.php");
}

    if(isset($_POST["Login"]))
    {
        include 'conn.php';

        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $password = md5($password);


        $query2 = "SELECT * FROM users WHERE email ='{$email}' AND password='{$password}' ";
        $result = mysqli_query($con, $query2);
        $count = mysqli_num_rows($result);

        if($count === 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION["SESSION_EMAIL"] = $email;
                header("Location: customer.php");
        }
        else {
            echo "<script> alert('Your login details is incorrect.'); </script>";
        }
    }

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
    font-family: 'Prata', sans-serif;
    font-family: 'Lato', sans-serif;
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">



  </head>

<body>
  <!-- Side-Nav -->
  <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100">
      <a href="#" class="nav-link h3 text-white my-2">
      <img src="assets/pawLogo-min.png" width="200" height="200"/> </br><p class="text-center mt-3">Paws and Tails Animal Clinic</p>
      </a>
      <li>
        <a href="index.php" class="nav-link text-white"><i class="bx bxs-dashboard"></i>
        <span class="mx-2">Home</span></a>
      </li>
      <li>
        <a href="about.php" class="nav-link text-white"><i class="bx bx-user-check"></i>
        <span class="mx-2">About Us</span></a>
      </li>
      <li>
        <a href="services.php" class="nav-link text-white"><i class="bx bx-user-check"></i>
        <span class="mx-2">Services</span></a>
      </li>
      <li>
        <a href="contactUs.php" class="nav-link text-white"><i class="bx bx-conversation"></i>
        <span class="mx-2">Contact Us</span></a>
      </li>
      <li>
        <a href="customerLogin.php" class="nav-link text-white"><i class="bx bx-conversation"></i>
        <span class="mx-2">Sign-In</span></a>
      </li>
    </ul>

    <span href="#" class="nav-link h4 w-100 mb-5 text-center">
        <h5>Follow Us:</h5>
      <a href=""><i class="bx bxl-instagram-alt text-white"></i></a>
      <a href=""><i class="bx bxl-twitter px-2 text-white"></i></a>
      <a href=""><i class="bx bxl-facebook text-white"></i></a>
    </span>
  </div>

  <!-- Main Wrapper -->
<div class="p-1 my-container active-cont">
    <!-- Top Nav -->
    <nav class="navbar top-navbar navbar-light bg-light px-5">
      <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
      <p style="font-family: 'Prata', sans-serif; font-size:35px; color: #5c3d2e">Paws and Tails Animal Care Clinic</p>
    
    </nav>
    <!--End Top Nav -->

    <!--LOGIN FORM-->

    <div class="container">
        <div class="row">
                <div class="card mt-5">
            <div class="col-lg-6 m-auto"  style="background-color: #fcdec0;">
                    <div class="card-title text-white mt-5">
                      <h2 class="text-center py-3" style="font-family: 'Lato', serif; font-size:35px; color: #5c3d2e;">Customer Login Form</h2>
                    </div>

                   
                    <div class="card-body">
                        
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Enter Email here" class="form-control mt-3">
                            <input type="password" name="password" placeholder="Enter Password here" class="form-control mt-3">
                            <button class="btn btn-outline-dark mt-3" style="float:right;" name="Login">LOG-IN</button>
                        </form>
                        <p class="mt-3" style="color:#5C3D2E;">Create account here! <a href="register.php" style="text-decoration:none; color:#5C3D2E;">REGISTER</a></p>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer-->
    <footer class="footer py-3">
      <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; 2021 - Paws and Tails Animal Clinic</p></div>
    </footer>
</div><!--EOF MAIN CONTAINER-->
    <!--BOOTSRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--main.js-->
    <script src="js/main.js"></script>
</body>
</html> 