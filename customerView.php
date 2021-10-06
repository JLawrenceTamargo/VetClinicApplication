<?php

session_start();
if (!isset($_SESSION["SESSION_EMAIL"])) {
    header("Location: customerLogin.php");
}

include 'conn.php';
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



    <div class="container mt-5 mb-5" style="padding-top:60px;">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title  mt-5">
                        <h3 class="text-center py-3">View Account Details</h3>

                    </div>

                    <div class="card-body" style="background-color:#7E6752;">

                        <form action="customerEdit.php" method="post">

                            <?php
                            $sql = "SELECT * FROM users WHERE email='{$_SESSION["SESSION_EMAIL"]}'";
                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                            ?>

                                <label class="text-white">User ID:</label>
                                <input type="text" name="userID" class="form-control mb-3" value="<?php echo $row["userID"]; ?>" readonly>

                                <label class="text-white">Firstname:</label>
                                <input type="text" name="firstname" class="form-control mb-3" value="<?php echo $row["firstname"]; ?>" readonly>

                                <label class="text-white">Lastname:</label>
                                <input type="text" name="lastname" class="form-control mb-3" value="<?php echo $row["lastname"]; ?>" readonly>

                                <label class="text-white">Email:</label>
                                <input type="email" name="email" class="form-control mb-3" value="<?php echo $row["email"]; ?>" readonly>

                                <button type="submit" class="btn mb-3 editbtn" style="background-color:#fcdec0;color:#7E6752; font-weight:bold; float:right;">EDIT INFO</button>


                            <?php } ?>
                            <!--EOF Fetching data-->


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer-->
    <footer class="footer py-3" style="background-color:#fcdec0;">
        <div class="container px-4 px-lg-5">
            <p class="m-0 text-center text-dark">Copyright &copy; 2021 - Paws and Tails Animal Clinic</p>
        </div>
    </footer>

    <!--BOOTSRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     <!-- Footer-->
    <footer class="footer py-3">
        <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; 2021 - Paws and Tails Animal Clinic</p></div>
    </footer>






</body>

</html>