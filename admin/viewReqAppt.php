<?php

session_start();
if (!isset($_SESSION["SESSION_EMAIL"])) {
    header("Location: viewReqAppt.php");
}

    include 'con2.php';
  
    
    $reqID = $_GET['reqID'];
    
    

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


    <script>
        function SelectedTextValue(ele) {
            if (ele.selectedIndex > 0) {
                var selectedText = ele.options[ele.selectedIndex].innerHTML;
                var selectedValue = ele.value;
                document.getElementById("stat").value = selectedText;
            }
            else {
                document.getElementById("stat").value = "";
            }
        }
    </script>

  


    <title>Fur and Tails - ADMIN</title>
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

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class='bx bx-menu ibox'></i></a>
                    <h1>
                        Appointment Request of 
                        <?php
                            $sql = "SELECT * FROM appointment WHERE userID= '{$reqID}'";
                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result) > 0) 
                            {
                                $row = mysqli_fetch_assoc($result);
                        ?>
                        <h2><?php echo $row["patientFirstname"]; ?> <?php echo $row["patientLastname"]; ?>!</h2>
                        <?php } ?>
                    </h1>
                        <p>The following appointments are still pending</p>
                    </div>
                </div>
            </div>

<div class="col-lg-12 col-sm-6 text-center" data-example-id="striped-table">
  <table class="table table-striped table-bordered table-hover">
   
    <thead>
      <tr>
        <th scope="row">Appointment ID</th>
        <th>Pet Name</th>
        <th>Date</th>
        <th>Time</th>
        <th>Status</th>
        <th colspan="2">Update</th>
      </tr>
    </thead>
    <tbody>
    <?php
          
         
             $sqlA6= "SELECT * FROM appointment WHERE status = 'Approved' OR status='Cancelled' AND userID= '{$reqID}'   ";
             $resultA6= mysqli_query($con, $sqlA6);
         
          while($rows = mysqli_fetch_assoc($resultA6))
          {
   ?>
      <tr>
        <th scope="row"><?php echo $rows['apptID']; ?></th>
        <td><?php echo $rows['patientPet']; ?></td>
        <td><?php echo $rows['dateAppt']; ?></td>
        <td><?php echo $rows['timeAppt']; ?></td>
        <td><?php echo $rows['status']; ?></td>
        
        <td>
        <form action="update.php" method="POST">
           <label class="mt-2 mb-3">Set to:</label>
                <select name="statusAppt" style="width:120px;">
                    <option selected="selected" value="">-</option>
                    <option value="Pending" 
                    <?php 
                        echo ($rows['status']== 'Pending' ? 'selected': ' ') 
                    ?>
                    >Pending</option>

                    <option value="Approved"
                    <?php 
                        echo ($rows['status']== 'Approved' ? 'selected': ' ') 
                    ?>
                    >Approved</option>
                    
                    <option  value="Cancelled"
                    <?php 
                        echo ($rows['status']== 'Cancelled' ? 'selected': ' ') 
                    ?>
                    >Cancelled</option>

                </select>
                <label>Add Remarks:</label>
                <textarea name="remarks" placeholder="Remarks here" style="resize:none; height:50px;"></textarea>
                <input type="text" name="aptID" value="<?php echo $rows['apptID']; ?>" hidden/>
            <input type="text" name="userID" value="<?php echo $rows['userID']; ?>" hidden/>
            
           
           <!-- <input  name="stat" type="text" id="stat" name="statusAppt"/>-->
        </td>
                                
        <td><input type="submit" style="background-color: #F4EEC0; margin-top:12px;"  name="saveStat" value="SAVE"></input></td>
        </form>
      </tr>
    
    
    

      <?php }
      ?>
      
    </tbody>
    
  </table>
</div>

            </div>
        </div>
</div>
</body>
</html>