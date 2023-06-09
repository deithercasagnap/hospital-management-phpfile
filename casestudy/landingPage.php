<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="landingPage-style.css">
    <title>Hospital Management System Landing Page</title>
</head>
<body>

<nav id="navbar-content" class="navbar navbar-expand-lg bg-body-white fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand img-fluid ms-5" href="#">
            <img class="img-fluid" style="height: 70px; width: 250px;" src="images\logo.jpg" alt="hms-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item ms-2">
                <a class="nav-link fw-bold" href="#">Home</a>
                </li>

                <li class="nav-item ms-2">
                <a class="nav-link fw-bold" href="#about-us-content">About Us</a>
                </li>

                <li class="nav-item ms-2">
                <a class="nav-link fw-bold" href="#our-team-content">Our Team</a>
                </li>

                <li class="nav-item ms-2">
                <a class="nav-link fw-bold" href="#footer-content">Contact Us</a>
                </li>

                <li class="nav-item dropdown ms-2">
                    <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                        Log in
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="login-doctor.php">Professional</a></li>
                        <li><a class="dropdown-item" href="patient-login.php">Patient</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>



<div  id="content" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
            <img src="images\doctors-3.jpg" class="d-block w-100" alt="..." style="height: 580px;">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="images\doctors-1.jpg" class="d-block w-100" alt="..." style="height: 580px;">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="images\doctors-2.jpg" class="d-block w-100" alt="..." style="height: 580px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
</div>


    

<div id="about-us-content"  class="bg-light">
    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-6">
                <h1 id="about-us" class="display-4">About Us</h1>
                <p class="lead text-muted mb-0">Due to the COVID-19 pandemic and the mandatory lockdown measures, the Information Technology Students at the University of Science & Technology of Southern Philippines has implemented an online hospital management system. This initiative involves healthcare professionals who will provide assistance to any patients regarding their health issues. Through this system, individuals from anywhere can securely access their medical histories and seek appointments, ensuring a fast and hassle-free transaction. <a href="https://bootstrapious.com/snippets" class="text-muted"> 
                            <br><u class="text-primary">"Putting Safety First: Your Well-being, Our Priority."</u></a>
                </p>

            </div>
            <div class="col-lg-6 d-none d-lg-block"><img src="https://bootstrapious.com/i/snippets/sn-about/illus.png" alt="" class="img-fluid"></div>
        </div>

        <div id="timetable" class="row h-100 align-items-center py-5">
            <div  class="col border border-primary">
                <h3 id="weekly-timetable-text" class="text-center mt-2">WEEKLY TIMETABLE</h3>

                <table class="table text-center fs-6 ">
                
                    <tbody>
                    
                        <tr class="">
                            <td>Monday</td>
                            <td>8:00AM - 9:00PM</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>8:00AM - 9:00PM</td>
                        </tr>
                        
                        <tr>
                            <td>Wednesday</td>
                            <td>8:00AM - 9:00PM</td>
                        </tr>
                        <tr>  
                            <td>Thursday</td>
                            <td>8:00AM - 9:00PM</td>
                            
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td>8:00AM - 9:00PM</td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td>8:00AM - 9:00PM</td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td>8:00AM - 9:00PM</td>
                        </tr>
            
                    </tbody>
                    
                </table>   
            
            </div>

            <div class="col text-center">
                <div class="row ms-5 m-2">

                    <div id="card" class="col m-2 p-3">
                        <div class="bg-light rounded shadow py-3 px-4"><img  src="images\years-of-service.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail border border-success shadow">
                            <h5 class="text-secondary">3</h5>
                            <h6 id="text-color-h6">Years of Service</h6>
                        </div>
                    </div>

                    <div id="card" class="col m-2 p-3">
                        <div class="bg-light rounded shadow bg-success py-3 px-4"><img  src="images\doctors-icon.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail border border-primary shadow">
                            <h5 class="text-secondary">23</h5>
                            <h6 id="text-color-h6">Qualified Doctors</h6>
                        </div>
                    </div>
                </div>

                <div  class="row  ms-5 m-2">
                    <div id="card" class="col m-2 p-3">
                        <div class="bg-light rounded shadow py-3 px-4"><img  src="images\nurses.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail border border-danger shadow">
                            <h5 class="text-secondary">66</h5>
                            <h6 id="text-color-h6">Qualified Nurses</h6>
                        </div>
                        
                    </div>

                    <div id="card" class="col m-2 p-3">
                        <div class="bg-light rounded shadow py-3 px-4"><img  src="images\patients.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail border border-info shadow">
                            <h5 class="text-secondary">98,221</h5>
                            <h6 id="text-color-h6">Happy Patients</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    
    </div>

    <div id="our-team-content" class="bg-white py-5">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col">
                    <h2 id="our-team" class="display-4 font-weight-light">Our team</h2>
                    <p class="font-italic text-muted">Meet the four diligent and driven students embarked on a remarkable journey to develop a groundbreaking hospital management system. Their unwavering determination and tireless efforts led them on a path of innovation and collaboration.</p>
                </div>
            </div>

            <div class="row text-center">
                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-light rounded shadow-sm py-5 px-4"><img src="images\sam.jpg" alt="" width="200" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm border border-success">
                    <h5 class="mb-0">Deither Casagnap</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-github"></i></a></li>
                    </ul>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-light rounded shadow-sm py-5 px-4"><img src="images\cyd.jpg" alt="" width="200" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm border border-success">
                    <h5 class="mb-0">Cyd Juario</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-github"></i></a></li>
                    </ul>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-light rounded shadow-sm py-5 px-4"><img src="images\joy.jpg" alt="" width="200" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm border border-success">
                    <h5 class="mb-0">Abba Joy Tautoan</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-github"></i></a></li>
                    </ul>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-light rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="200" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm border border-success">
                    <h5 class="mb-0">Kyt Edol</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-github"></i></a></li>
                    </ul>
                    </div>
                </div>
                <!-- End-->

            </div>
        </div>
    </div>

</div>


  <!-- Footer -->
  <footer  
          id="footer-content"
          class="text-white "
          style="background-color: white"
          >
    <!-- Section: Social media -->
        <section
                class="d-flex justify-content-between"
                style="background-color: #0d92cb"
                >
            <!-- Left -->
            <div class="me-5 text-center p-4">
                <span class="text-center fs-3 fw-bold">Be connected with us to ensure your safety!</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div class="d-flex justify-content-between align-items-center text-white">
                <a href="" class="text-white me-4">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="text-secondary">
                <div class="container">
                    <!-- Grid row -->
                    <div class="row mt-4 ">
                        <!-- Grid column -->
                        <div class="col">
                            <!-- Content -->
                            <a class="navbar-brand img-fluid" href="#navbar">
                            <img class="img-fluid" style="height: 70px; width: 300px;" src="images\logo.jpg" alt="hms-logo">
                            </a>

                            <p>
                               <u>Hospital Management System</u> is a comprehensive software solution that streamlines and automates various administrative and operational tasks within a healthcare institution, improving efficiency and enhancing patient care.
                            </p>
                        </div>

                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col ms-5">
                            <!-- Links -->
                            <h6 id="footer" class="text-uppercase fw-bold">Services</h6>
                            <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                                />
                            <p>
                                <a href="#" class="text-secondary">Physical Exam</a>
                            </p>
                            <p>
                                <a href="#" class="text-secondary">Prescription Refill</a>
                            </p>
                            <p>
                                <a href="#" class="text-secondary">Psychological</a>
                            </p>
                            <p>
                                <a href="#" class="text-secondary">Guidance Counseling</a>
                            </p>
                            <p>
                                <a href="#" class="text-secondary">Dental</a>
                            </p>
                        </div>

                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col ms-5">
                            <!-- Links -->
                            <h6 id="footer" class="text-uppercase fw-bold">Opening Hours</h6>
                            <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                                />
                            <p>
                                <a href="#timetable" class="text-secondary">Weekly Timetable</a>
                            </p>
                            
                        </div>

                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col ms-5">
                            <!-- Links -->
                            <h6 id="footer" class="text-uppercase fw-bold">Contact Us</h6>
                            <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                                />
                            <p><i class="fas fa-home mr-3"></i> Ustp, CDO, 9000</p>
                            <p><i class="fas fa-envelope mr-3"></i> hms_healthcare@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> +63 928 320 3488</p>
                            <p><i class="fas fa-print mr-3"></i> +63 928 455 2491</p>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->
                </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div
            class="text-center text-secondary p-3"
            style="background-color: #c0da6c"
            >
            © 2023 Copyright:
            <a class="text-secondary" href="https://mdbootstrap.com/"
            >BSIT-2R2-CASAGNAP-JUARIO-TAUTOAN-EDOL.com</a
            >
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->




<script src="https://kit.fontawesome.com/yourcode.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<!-- <script src="landingPage-script.js"></script> -->
</body>
</html>