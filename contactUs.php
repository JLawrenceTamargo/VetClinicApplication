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
      <p style="font-family: 'Prata', sans-serif; font-size:35px; color: #5c3d2e;">Fur and Tails Animal Care Clinic</p>
    
    </nav>
    <!--End Top Nav -->
   

    <!--CONTACT US CONTENTS-->
    <section class="mb-5 py-3">
        
            
      

<div class="container-contact">

    <div class="wrap-header">
        <h1 style="color: #5c3d2e; font-family: 'Lato', sans-serif; "><b>CONTACT</b> US</h1>
          <div class="hero-text"><i>Got any Questions? Feel free to ask or visit our FAQ page</i></div>  
    </div>
  
    <div class="wrap-contact">

      <form name="contact" class="contact-form validate-form" method="post" action= "contact-form-handler.php">

        <div class="wrap-input validate-input" data-validate="Please enter your name">
          <input class="input" type="text" name="name" placeholder="Full Name">
        </div>

        <div class="wrap-input validate-input" data-validate = "Please enter your email">
          <input class="input" type="text" name="email" placeholder="E-mail">
        </div>

        <div class="wrap-input validate-input" data-validate = "Please enter your message">
          <textarea class="input" type="text" name="message" placeholder="Your Message"></textarea>
        </div>

        <div class="container-contact-form-btn">
          <button type="submit" class="contact-form-btn">
            <span>Send</span>
          </button>
        </div>

        <div class="grid-container">
          <div class="item1 left-align"><i class="fa fa-lg fa-map-marker-alt"></i> 4517 Salcedo Street, Makati, Metro Manila</div>  
          <div class="item4 right-align"><i class="fa fa-lg fa-phone"></i> (123) 456-7890<br>(123) 456-7890</div>

      </div>

      </form>

    </div>
  </div>
</div>

</div>

</section>

    <!--EOF CONTACT US -->

    <!-- Footer-->
    <footer class="footer py-3">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; 2021 - Fur and Tails Animal Clinic</p></div>
        </footer>
</div><!--EOF MAIN CONTAINER-->

<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>