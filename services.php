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
      <img src="assets/pawLogo-min.png" width="200" height="200"/> </br><p class="text-center mt-3">Paws and Tails Animal Clinic</p>
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
        <h5>Follow Us:</h5>
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
      <p style="font-family: 'Prata', sans-serif; font-size:35px; color: #5c3d2e;">Paws and Tails Animal Care Clinic</p>
    
    </nav>
    <!--End Top Nav -->

        
<!--SERVICE-->
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="d-flex align-items-center justify-content-between" style="padding-top: 20px; padding-bottom: 20px">
                <h1 style="color: #5c3d2e; font-family: 'Lato', sans-serif;"><b>OUR</b> SERVICES</h1>
                <div class="container-contact-form-btn">
                <button type="submit" class="contact-form-btn">
                <span>BOOK APPOINTMENT</span>
                </button>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
    
        <!--SERVICE 1-->
        <div class="col-md-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-3">
                    <img src="https://1hsfbn3a2al0423vqfgf8st1-wpengine.netdna-ssl.com/wp-content/uploads/2016/11/brownpup.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title" style="font-family: 'Prata', sans-serif; color: #5c3d2e">GROOMING</h2>
                        <p class="card-text" style="font-family: 'Lato',sans-serif; font-size: 20px">
                        Proper Hygienic Care and Cleaning.
                    </p>
                    <button
                    type="button"
                    class="btn btn-outline-dark"
                    data-bs-toggle="modal"
                    data-bs-target="#Modal_1"
                    >
                    Learn More
                </button>
                <!-- Modal -->
              <div
                class="modal fade"
                id="Modal_1"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5
                        class="modal-title"
                        id="exampleModalLabel"
                        style="font-family: 'Lato',sans-serif; color: #5c3d2e"
                      >
                        GROOMING
                      </h5>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                      We offer a premium grooming experience with a focus on
                      personal care and customer service.
                    </div>
                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                      >
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!--SERVICE 2-->
        <div class="col-md-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-3">
                    <img src="https://img.huffingtonpost.com/asset/5bb67065250000cf0039a480.jpeg?ops=scalefit_630_400_noupscale" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                    <h2 class="card-title" style="font-family: 'Prata',sans-serif; color: #5c3d2e">CONSULTATION</h2>
                    <p class="card-text" style="font-family: 'Lato',sans-serif; font-size: 20px">
                    Animal Treatment and Prevention Advice.
                    </p>
                <button
                type="button"
                class="btn btn-outline-dark"
                data-bs-toggle="modal"
                data-bs-target="#Modal_2"
                >
                Learn More
              </button>
              <!-- Modal -->
              <div
                class="modal fade"
                id="Modal_2"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5
                        class="modal-title"
                        id="exampleModalLabel"
                        style="font-family: 'Lato',sans-serif; color: #5c3d2e"
                      >
                        CONSULTATION
                      </h5>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                      We offer a free 15-minute consultation with a licensed
                      veterinarian. We also offer memberships at a reduced price
                      for those who need more support.
                    </div>
                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                      >
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </div>
       </div>
     </div>
    </div><!--EOF 1st ROW-->

    <div class="row">
        <!--SERVICE 3-->
        <div class="col-md-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-3">
                    <img src="https://cdn.petcarerx.com/blog/wp-content-uploads-2013-06-hug-dog-boarding.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                    <h2 class="card-title" style="font-family: 'Prata',sans-serif; color: #5c3d2e">VACCINATIONS</h2>
                    <p class="card-text" style="font-family: 'Lato',sans-serif; font-size: 20px">
                    Protect Your Animals from Diseases and Viruses.
                    </p>
                <button
                type="button"
                class="btn btn-outline-dark"
                data-bs-toggle="modal"
                data-bs-target="#Modal_3"
                >
                Learn More
              </button>
              <!-- Modal -->
              <div
                class="modal fade"
                id="Modal_3"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5
                        class="modal-title"
                        id="exampleModalLabel"
                        style="font-family: 'Lato',sans-serif; color: #5c3d2e"
                      >
                        VACCINATIONS
                      </h5>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                     The importance of getting your pets the proper
                      immunizations to protect them from long-term health risks.
                    </div>
                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                      >
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
     </div>

        <!--SERVICE 4-->
        <div class="col-md-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-3">
                    <img src="https://cdn.shopify.com/s/files/1/0321/4766/9123/files/Cancer_Kit_Dog.png?v=1601054849" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                    <h2 class="card-title" style="font-family: 'Prata',sans-serif; color: #5c3d2e">LABORATORIES</h2>
                    <p class="card-text" style="font-family: 'Lato',sans-serif; font-size: 20px">
                    Laboratory Test For Veterinary Care.
                    </p>
                <button
                type="button"
                class="btn btn-outline-dark"
                data-bs-toggle="modal"
                data-bs-target="#Modal_4"
              >
                Learn More
              </button>
              <!-- Modal -->
              <div
                class="modal fade"
                id="Modal_4"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5
                        class="modal-title"
                        id="exampleModalLabel"
                        style="font-family: 'Lato',sans-serif; color: #5c3d2e"
                      >
                        LABORATORIES
                      </h5>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                      Blood test or lab test to check about your pet's health.
                    </div>
                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                      >
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </div>
        </div>
      </div>
    </div><!--EOF 2nd ROW-->


    <div class="row">
        <!--SERVICE 5-->
        <div class="col-md-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-3">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuCjLk8M9DC__QFN-5cLrNURapW0Epj53wDw&usqp=CAU" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                    <h2 class="card-title" style="font-family: 'Prata',sans-serif; color: #5c3d2e">CONFINEMENT</h2>
                    <p class="card-text" style="font-family: 'Lato',sans-serif; font-size: 20px">
                    Delivering Excellent Care to Confined Pets.
                    </p>
                <button
                type="button"
                class="btn btn-outline-dark"
                data-bs-toggle="modal"
                data-bs-target="#Modal_5"
                >
                Learn More
              </button>
              <!-- Modal -->
              <div
                class="modal fade"
                id="Modal_5"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5
                        class="modal-title"
                        id="exampleModalLabel"
                        style="font-family: 'Lato',sans-serif; color: #5c3d2e"
                      >
                        CONFINEMENT
                      </h5>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                    Monitoring on your pet’s condition regularly. Sanitize
                    facilities and disinfect reusable medical equipment.
                    </div>
                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                      >
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!--SERVICE 6-->
        <div class="col-md-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-3">
                    <img src="https://www.marinhumane.org/wp-content/uploads/2021/06/vols-1-250x400.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                    <h2 class="card-title" style="font-family: 'Prata',sans-serif; color: #5c3d2e">HOME SERVICE</h2>
                    <p class="card-text" style="font-family: 'Lato',sans-serif; font-size: 20px">
                    Available within Metro Manila <br> from 9AM - 6PM.
                </p>
                <button
                type="button"
                class="btn btn-outline-dark"
                data-bs-toggle="modal"
                data-bs-target="#Modal_6"
                >
                Learn More
              </button>
              <!-- Modal -->
              <div
                class="modal fade"
                id="Modal_6"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5
                        class="modal-title"
                        id="exampleModalLabel"
                        style="font-family: 'Lato',sans-serif; color: #5c3d2e"
                      >
                       HOME SERVICE
                      </h5>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                    Veterinarian on call for more personal and convenient
                    service. Vet's expertise without the hassle and stress of
                    heading into the animal hospital. Call or message us for
                    more further inquiries and details.
                    </div>
                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                      >
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--EOF 3rd ROW-->
</div><!--EOF Container-->
<!-- Footer-->
<footer class="footer py-3">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; 2021 - Paws and Tails Animal Clinic</p></div>
        </footer>
    
</div><!--EOF MAIN CONTAINER-->
        
    
    
    
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>