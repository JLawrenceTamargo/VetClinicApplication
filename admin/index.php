<?php

session_start();
if (isset($_SESSION["SESSION_EMAIL_ADMIN"])) {
    header("Location: adminDashboard.php");
}

if(isset($_POST["adminLogin"]))
{
    include 'con2.php';

    $emailA = mysqli_real_escape_string($con, $_POST['email']);
    $password1 = mysqli_real_escape_string($con, $_POST['password']);
    $password = md5($password1);


    $queryA2 = "SELECT * FROM adminUsers WHERE email ='{$emailA}' AND password='{$password}' ";
    $resultA2 = mysqli_query($con, $queryA2);
    $count = mysqli_num_rows($resultA2);

    if($count === 1) {
        $row = mysqli_fetch_assoc($resultA2);
        $_SESSION["SESSION_EMAIL_ADMIN"] = $emailA;
        echo "<script> alert('Login Successfully'); window.location='adminDashboard.php'; </script>";
           // header("Location: adminDashboard.php");
    }
    else {
        echo "<script> window.alert('Your login details is incorrect.'); </script>";
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
    <link rel="stylesheet" href="adminStyle.css">
  
    <!--FONTS
    font-family: 'Overpass', sans-serif;
    font-family: 'Permanent Marker', cursive;
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass&family=Permanent+Marker&display=swap" rel="stylesheet">


  


    <title>Fur and Tails - ADMIN</title>
</head>
<body class="bodyDex">
<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
              
                <div class="col-lg-12 login-title">
                    ADMIN LOG-IN
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label class="form-control-label">EMAIL</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" name="adminLogin" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>

</body>
</html>