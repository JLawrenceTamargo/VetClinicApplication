<?php

session_start();
if (!isset($_SESSION["SESSION_EMAIL"])) {
    header("Location: customerLogin.php");
}
include 'conn.php';

if (isset($_POST["updateInfo"])) {
    $pUid = $_POST['userID'];
    $pFname = $_POST['firstname'];
    $pLname = $_POST['lastname'];
    $pEmail = $_POST['email'];


    $query5 = "UPDATE users SET firstname = '{$pFname}', lastname = '{$pLname}', email = '{$pEmail}' WHERE userID = '{$pUid}'";
    $result3 = mysqli_query($con, $query5);

    if ($result3) {

        echo "<script> alert('Updated Successfully'); window.location='customerView.php?userID=$pUid' </script>";
    } else {
        echo "<script>alert('Error'); window.location='customerView.php?userID=$pUid';</script>";
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



    <title>Paws and Tails</title>


</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar fixed-top navbar-expand-lg bg-nav p-md-3" style="background-color:#fcdec0;">
        <div class="container">
            <p class=" ms-2" style="font-family: 'Permanent Marker', cursive; font-size:25px;">Paws and Tails Animal Clinic</p>
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







    <!-- Footer-->
    <footer class="footer py-3" style="background-color:#fcdec0;">
        <div class="container px-4 px-lg-5">
            <p class="m-0 text-center text-dark">Copyright &copy; 2021 - Paws and Tails Animal Clinic</p>
        </div>
    </footer>

    <!--BOOTSRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>







</body>

</html>