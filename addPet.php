<?php

session_start();
if(!isset($_SESSION["SESSION_EMAIL"])){
    header("Location: customerLogin.php");
}
include_once 'conn.php';

if(isset($_POST["RegisterPet"])){
   

    $petname= mysqli_real_escape_string($con, $_POST['petName']);
    $petgender= mysqli_real_escape_string($con, $_POST['petGender']);
    $petbdate= mysqli_real_escape_string($con, $_POST['petBdate']);
    $petbreed= mysqli_real_escape_string($con, $_POST['petBreed']);
    $userid = mysqli_real_escape_string($con, $_POST['userID']);


    $query3 = "INSERT INTO pets (petName, petGender, petBdate, petBreed, userID) VALUES ('{$petname}','{$petgender}', '{$petbdate}', '{$petbreed}', '{$userid}')";
            $result1 = mysqli_query($con, $query3);

            if($result1)
            {
                echo "<script> alert('Added Sucessfully'); window.location= 'addPet.php' </script>";
                //header("Location: addPet.php");
                
            
            }
            else{
                echo "<script>Error: '.$query3.mysqli_error($con).'</script>";
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

    <div class="container mt-5" style="padding-top:60px;">
        <div class="row">
        
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-3">Pet Registration Form</h3>
                        
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
                            <?php } ?>
                            
                            <label class="text-white">Pet Name:</label>
                            <input type="text" name="petName" placeholder="Enter Pet Name here" class="form-control mb-3">
                            
                            <label class="text-white">Pet Gender</label>
                            <div class="form-check text-white">
                                <input class="form-check-input" type="radio" name="petGender" id="petGender" value="Male"/>
                                <label class="form-check-label" for="petGender">MALE</label>
                            </div>
                            <div class="form-check text-white mb-3">
                                <input class="form-check-input" type="radio" name="petGender" id="petGender" value="Female"/>
                                <label class="form-check-label" for="petGender">FEMALE</label>
                            </div>

                            <label class="text-white">Pet Birthdate</label>
                            <input type="date" name="petBdate" placeholder="Enter Pet Birthdate here" class="form-control mb-3">
                            
                            
                            <label class="text-white">Pet Breed:</label>
                            
                            <div class="dropdown mb-3">
                            <select name="petBreed" id="ddlContent" onchange="SelectedTextValue(this)">
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <option selected="selected" value="">SELECT BREED</option>
                                    <option value="Shih-Tzu">Shih-Tzu</option>
                                    <option value="Pomeranian">Pomeranian</option>
                                    <option value="Pug">Pug</option>
                                    <option value="Siberian Husky">Siberian Husky</option>
                                    <option value="Maltese">Maltese</option>
                                    <option value="Labrador">Labrador</option>
                                    <option value="Golden Retriever">Golden Retriever</option>
                                    <option value="Askal">Askal</option>
                                    <option value="Siamese Cat">Siamese Cat</option>
                                    <option value="Persian Cat">Persian Cat</option>
                                    <option value="Bengal Cat">Bengal Cat</option>
                                    <option value="Siberian Cat">Siberian Cat</option>
                                    <option value="Balinese Cat">Balinese Cat</option>
                                </ul>
                            </select>
                            <input name="txtContent" type="text" id="txtContent" name="petBreed"/>
                            </div>

                            <button class="btn btn-success mt-3" name="RegisterPet">REGISTER PET</button>
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