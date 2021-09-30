<?php

session_start();
if(!isset($_SESSION["SESSION_EMAIL"])){
    header("Location: customerLogin.php");
}
include_once 'conn.php';

if(isset($_POST["BookAppt"])){
   
    $uid = mysqli_real_escape_string($con, $_POST['userID']);
    $pEmail = mysqli_real_escape_string($con, $_POST['email']);
    $pFname = mysqli_real_escape_string($con, $_POST['firstname']);
    $pLname = mysqli_real_escape_string($con, $_POST['lastname']);
    $pPet = mysqli_real_escape_string($con, $_POST['petName2']);
    $pDate = mysqli_real_escape_string($con, $_POST['dateAppt']);
    $pTime = mysqli_real_escape_string($con, $_POST['timeAppt']);
    $pServices = mysqli_real_escape_string($con, $_POST['services']);

    
    $query4 = "INSERT INTO appointment (userID, patientFirstname, patientLastname, patientPet, dateAppt, timeAppt, serviceAvail, patientEmail, status) 
    VALUES ('{$uid}', '{$pFname}', '{$pLname}', '{$pPet}', '{$pDate}', '{$pTime}', '{$pServices}', '{$pEmail}', 'Pending')";
    $result2 = mysqli_query($con, $query4);

    if($result2)
    {
        header("Location: bookAppt.php");
        echo "<script> alert('Appointment Booked Successfully'); </script>";
    }
    else
    {
        echo "<script>Error: '.$query4.mysqli_error($con).'</script>";
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
    font-family: 'Overpass', sans-serif;
    font-family: 'Permanent Marker', cursive;
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass&family=Permanent+Marker&display=swap" rel="stylesheet">

    <title>VetMed Clinic</title>


    <script>
        function SelectedTextValue(ele) {
            if (ele.selectedIndex > 0) {
                var selectedText = ele.options[ele.selectedIndex].innerHTML;
                var selectedValue = ele.value;
                document.getElementById("txtContent").value = selectedText;
            }
            else {
                document.getElementById("txtContent").value = "";
            }
        }
        function SelectedTextValue2(ele) {
            if (ele.selectedIndex > 0) {
                var selectedText = ele.options[ele.selectedIndex].innerHTML;
                var selectedValue = ele.value;
                document.getElementById("txtContent2").value = selectedText;
            }
            else {
                document.getElementById("txtContent2").value = "";
            }
        }


    </script>
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


    <div class="container mt-5 mb-5" style="padding-top:60px; padding-bottom:60px;">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-3">Book An Appointment</h3>
                      
                    </div>

                    <div class="card-body">
                        
                        <form action="" method="post">

                        <?php
                            $sql = "SELECT * FROM users WHERE email='{$_SESSION["SESSION_EMAIL"]}'";
                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result) > 0) 
                            {
                                $row = mysqli_fetch_assoc($result);
                        ?>

                            <label class="text-white">User ID:</label>
                            <input type="text" name="userID"  class="form-control mb-3" value="<?php echo $row["userID"]; ?>" readonly>
                            
                            <label class="text-white">Email:</label>
                            <input type="text" name="email"  class="form-control mb-3" value="<?php echo $row["email"]; ?>" readonly>
                            
                            <label class="text-white">Firstname:</label>
                            <input type="text" name="firstname"  class="form-control mb-3" value="<?php echo $row["firstname"]; ?>" readonly>
                            
                            <label class="text-white">Lastname:</label>
                            <input type="text" name="lastname"  class="form-control mb-3" value="<?php echo $row["lastname"]; ?>" readonly>
                            
                            <label class="text-white mt-4">Select the name of your pet:</label>
                           <select name="petName2" id="ddlContent" onchange="SelectedTextValue2(this)">
                           <option selected="selected" value="">SELECT PET</option>
                                <?php
                                  $userid1 = $row["userID"];;
                                  
                                  $q1= "SELECT petName FROM pets WHERE userID= '$userid1' ";
                                  $r1 = mysqli_query($con, $q1);
                                
                                  while($row = mysqli_fetch_array($r1))
                                  {
                                ?>
                                
                                    <option> <?php echo $row["petName"]; ?></option>
                                <?php
                                  }
                                ?>

                            </select>
                            <input type="text" id="txtContent2" name="petName2"/>
                            <br/>
                            <?php } ?><!--EOF Fetching data-->

                            <p class="text-warning mt-3">If you cannot see on the list the name of your pet, kindly register it <span><a href="addPet.php">Register Pet</a></span></p>



                          
                            <label class="text-white">Select Date:</label>
                            <input type="date" name="dateAppt" class="form-control mb-3">
                            
                            <label class="text-white">Select Time:</label>
                            <input type="time" name="timeAppt" class="form-control mb-3">
                            
                            
                            <label class="text-white">Select Service to avail:</label>
                            
                            <div class="dropdown mb-3">
                            <select name="services" id="ddlContent" onchange="SelectedTextValue(this)">
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <option selected="selected" value="">SELECT SERVICE</option>
                                    <option value="Grooming">Grooming</option>
                                    <option value="Consultation">Consultation</option>
                                    <option value="Vaccination">Vaccination</option>
                                    <option value="Laboratories">Laboratories</option>
                                    <option value="Confinement">Confinement</option>
                                    <option value="Home Service">Home Service</option>
                                </ul>
                            </select>
                            <input  type="text" id="txtContent" name="services"/>
                            </div>

                            <button class="btn btn-success mt-3" name="BookAppt">BOOK APPOINTMENT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer-->
    <footer class="footer py-3 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; 2021 - Fur and Tails Animal Clinic</p></div>
        </footer>

    <!--BOOTSRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>