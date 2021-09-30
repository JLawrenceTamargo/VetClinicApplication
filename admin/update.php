<?php

session_start();
if (!isset($_SESSION["SESSION_EMAIL"])) {
    header("Location: viewReqAppt.php");
}

    include 'con2.php';
  
 
    if(isset($_POST['saveStat']))
    {
        $statusSet= $_POST['statusAppt'];
        $aID = $_POST['aptID'];
        $uID = $_POST['userID'];
        $rem= $_POST['remarks'];


       // echo $aID; die;
       

        $sqlStat= "UPDATE appointment SET status ='$statusSet', remarks='$rem' WHERE apptID = '$aID'";
        $resultStat= mysqli_query($con, $sqlStat);


        
        if($resultStat)
        {
            echo "<script> alert('Updated Successfully'); window.location='viewReqAppt.php?reqID=$uID'; </script>";
            
        }
        else
        {
            echo "<script> alert('Error'); window.location='viewReqAppt.php?reqID=$uID'; </script>";
       
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
    <link rel="stylesheet" href="adminDash.css">
  
    <!--FONTS
    font-family: 'Overpass', sans-serif;
    font-family: 'Permanent Marker', cursive;
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass&family=Permanent+Marker&display=swap" rel="stylesheet">


    

  


    <title>Fur and Tails - ADMIN</title>
</head>
<body>


</body>
</html>