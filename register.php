<?php

    session_start();
    if(isset($_SESSION["SESSION_EMAIL"])){
        header("Location: customer.php");
    }

    
    if(isset($_POST["Register"])){
        include 'conn.php';

        $firstname= mysqli_real_escape_string($con, $_POST['firstname']);
        $lastname= mysqli_real_escape_string($con, $_POST['lastname']);
        $email= mysqli_real_escape_string($con, $_POST['email']);
        $password= mysqli_real_escape_string($con, $_POST['password']);
        $confirmPassword= mysqli_real_escape_string($con, $_POST['confirmPassword']);


        if(mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE email='{$email}'"))>0) {
            echo "<script>alert('{$email} - This email has already taken.');</script>";
        }
        else {
            if($password === $confirmPassword) {
                $hashedP= md5($password);
                $query1 = "INSERT INTO users (firstname, lastname, email, password) VALUES ('{$firstname}','{$lastname}', '{$email}', '{$hashedP}')";
                $result = mysqli_query($con, $query1);

                if($result)
                {
                    header("Location: index.php");
                }
                else{
                    echo '<script>Error: ".$query1.mysqli_error($con)."</script>';
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
      <img src="assets/pawLogo-min.png" width="200" height="200"/> </br><p class="text-center mt-3">Fur and Tails Animal Clinic</p>
      </a>
      <li>
        <a href="#" class="nav-link text-white"><i class="bx bxs-dashboard"></i>
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
        <p>Follow us:</p>
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
      <p style="font-family: 'Overpass', sans-serif; font-size:35px;">Fur and Tails Animal Care Clinic</p>
    
    </nav>
    <!--End Top Nav -->

    <!--REGISTRATION FORM-->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5"  style="background-color: #fcdec0; color: #5c3d2e !important;">
                    <div class="card-title mt-5">
                        <h3 class="text-center py-3">Customer Registration Form</h3>
                    </div>

                    

                    <div class="card-body">
                        
                        <form action="" method="post">

                            <input type="text" name="firstname" placeholder="Enter Firstname here" class="form-control mt-3">
                            <input type="text" name="lastname" placeholder="Enter Lastname here" class="form-control mt-3">
                            <input type="email" name="email" placeholder="Enter Email here" class="form-control mt-3">
                            <input type="password" name="password" placeholder="Enter Password here" class="form-control mt-3">
                            <input type="password" name="confirmPassword" placeholder="Confirm Password here" class="form-control mt-3">
                           
                            <div class="d-flex justify-content-between align-items-center">
                              <p class="mt-3" style="color: #5c3d2e">Already have an existing account? <a href="customerLogin.php" style="color: #5c3d2e;"><u>SIGN-IN</u></a></p>
                            <button class="btn mt-3" style="background: #5c3d2e; color: white;  " name="Register">REGISTER</button>
                            </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--EOF REGISTRATION FORM-->

    <!-- Footer-->
<footer class="footer py-3 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; 2021 - Fur and Tails Animal Clinic</p></div>
        </footer>
</div><!--EOF MAIN CONTAINER-->
    

    <!--BOOTSRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>