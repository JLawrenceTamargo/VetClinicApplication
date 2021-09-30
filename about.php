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
      <p style="font-family: 'Prata', serif; font-size:35px; color: #5c3d2e;">Fur and Tails Animal Care Clinic</p>
    
    </nav>
    <!--End Top Nav -->

    <!--ABOUT PAGE-->
    <div class="aboutus-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-2 col-xs-12">
                    <div class="aboutus mb-5">
                        <h1 style="color: #5c3d2e; font-family: 'Lato', sans-serif;"><b>ABOUT</b> US</h1> 
                        <br>
                        <p class="aboutus-text" style="font-family: 'Prata', serif; font-size:20px;">We love pets!
                          Our focus is to provide quality veterinary care that incorporates all styles and modes of medicines throughout the life of your pet as well as satisfaction to you as their owners. Clients are our boss, quality is our work and value for money is our goal. </p>
                        <img src="img/about.img.jpg"  width="300px" height="auto" alt="dog and a a healthcare personnel">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus-banner">
                        <img src="img/au-bg." alt="">
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="feature">
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <br>
                                <br>
                                <div class="feature-content mb-4">
                                    <h2 style="color: #5c3d2e; font-family: 'Prata', sans-serif;">Work with Heart</h2>
                                    <p class="aboutus-text" style="font-family: 'Lato', serif; font-size:22px">We combine our expertise with a love for animals and the belief that kindness is the foundation of veterinary medicine.</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content mb-4">
                                    <h2 style="color: #5c3d2e; font-family: 'Prata', sans-serif;">Reliable Services</h2>
                                    <p class="aboutus-text" style="font-family: 'Lato', serif;font-size:22px">We use resources to the full, waste nothing and do only what we can do best.</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content mb-4">
                                    <h2 style="color: #5c3d2e; font-family: 'Prata', sans-serif;">Great Support</h2>
                                    <p class="aboutus-text" style="font-family: 'Lato', serif; font-size:22px">A mutual benefit is a shared benefit; a shared benefit will endure.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>



    <!--EOF ABOUT PAGE-->

    <!-- Footer-->
    <footer class="footer py-3">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; 2021 - Fur and Tails Animal Clinic</p></div>
        </footer>
</div>

<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html> 