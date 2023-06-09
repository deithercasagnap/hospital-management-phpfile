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
    <link rel="stylesheet" href="patient-landingPage-style.css">
    <title>Patient Landing Page</title>
</head>
<body>

    <nav id="navbar-content" class="navbar navbar-white bg-white sticky-top shadow">
        <div class="container-fluid">
            

            <button id="navbar-toggler" class="navbar-toggler ms-2 border border-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


          
            <div class="offcanvas offcanvas-start text-bg-white" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#personal-health-record">Personal Health Record</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Medical History</a>
                                <ul class="dropdown-menu dropdown-menu-white">
                                    <li><a class="dropdown-item" href="#medical-record1">Check-ups</a></li>
                                    <li><a class="dropdown-item" href="#admissions">Admissions</a></li>
                                    <li><a class="dropdown-item" href="#surgeries">Surgeries</a></li>
                                </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#appointments1">Appointments</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#consultationTimeline1">Consultation Timeline</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#vaccinationrecord1">Vaccination</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#temperaturelog1">Temperature logs</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#covid1">COVID-19</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contact-us1">Contact Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="landingPage.php">Log out</a>
                        </li>

                        
                    </ul>
                  

                </div>
            </div>

            <a class="navbar-brand img-fluid ms-5" href="#">
                <img class="img-fluid" style="height: 50px; width: 180px;" src="images\logo.jpg" alt="hms-logo">
            </a>

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



<div id="personal-health-record" class="d-flex justify-content-center">
        <div class="container border border-info m-5">
            <div class="m-3">
                <h5 id="personal-health-record-text" class="text-success">Personal Health Record</h5>
                <div class="" style="width: 300px;">
                    <div class="row d-flex align-items-center">
                        <label class="col fs-6" for="firstName">Patient Number</label>
                        <input type="text" id="firstName" class="col form-control border border-none text-danger fw-bold" />
                    </div>
                </div>
            </div>

            <div class="card m-3">
                <div class="m-3">
                    <h5 class="bg-success text-white p-2">Personal Information</h5>
                </div>
                
                <div class="row ms-2 me-2">
                    <div class="col">
                        <label class="" for="firstName">First Name</label>
                        <input type="text" id="firstName" class="form-control" />
                    </div>

                    <div class="col">
                        <label class="" for="middleName">Middle Name</label>
                        <input type="text" id="middleName" class="form-control" />
                    </div>

                    <div class="col">
                        <label class="" for="lastName">Last Name</label>
                        <input type="text" id="lastName" class="form-control" />
                    </div>
                </div>

                <div class="row ms-2 me-2">
                    <div class="col">
                        <label class="" for="birthday">Date of Birth</label>
                        <input type="date" id="birthday" class="form-control" />
                    </div>

                    <div class="col">
                        <label class="" for="gender">Gender</label>
                        <input type="text" id="gender" class="form-control" />
                    </div>

                    <div class="col">
                        <label class="" for="phone_number">Phone Number</label>
                        <input type="number" id="phone_number" class="form-control" />
                    </div>
                </div>

                <div class="row ms-2 me-2">
                    <div class="col">
                        <label class="" for="nationality">Nationality</label>
                        <input type="text" id="nationality" class="form-control" />
                    </div>

                    <div class="col">
                        <label class="" for="civilstatus">Civil Status</label>
                        <input type="text" id="civilstatus" class="form-control" />
                    </div>

                    <div class="col">
                        <label class="" for="religion">Religion</label>
                        <input type="text" id="religion" class="form-control" />
                    </div>
                </div>

                <div class="row ms-2 me-2 mb-3">

                    <div class="col">
                        <label class="" for="barangay">Barangay</label>
                        <input type="text" id="barangay" class="form-control" />
                    </div>

                    <div class="col">
                        <label class="" for="city">City</label>
                        <input type="text" id="city" class="form-control" />
                    </div>

                    <div class="col">
                        <label class="" for="province">Province</label>
                        <input type="text" id="province" class="form-control" />
                    </div>
                </div>
                
            </div>

            <div class="card m-3">
                <div class="m-3">
                    <h5 class="bg-danger text-white p-2">Contact Person In Case of Emergency</h5>
                </div>
                
                <div class="row ms-2 me-2">
                    <div class="col">
                        <label class="" for="firstName">First Name</label>
                        <input type="text" id="firstName" class="form-control" />
                    </div>

                    <div class="col">
                        <label class="" for="middleName">Middle Name</label>
                        <input type="text" id="middleName" class="form-control" />
                    </div>

                    <div class="col">
                        <label class="" for="lastName">Last Name</label>
                        <input type="text" id="lastName" class="form-control" />
                    </div>
                </div>

                <div class="row ms-2 me-2">
                    <div class="col">
                        <label class="" for="relationship">Relationship</label>
                        <input type="text" id="relationship" class="form-control" />
                    </div>

                    <div class="col">
                        <label class="" for="phone_number">Phone Number</label>
                        <input type="number" id="phone_number" class="form-control" />
                    </div>

                    <div class="col">
                        <label class="" for="email">Email Address</label>
                        <input type="email" id="email" class="form-control" />
                    </div>
                </div>

                <div class="row ms-2 me-2 mb-3">

                    <div class="col">
                        <label class="" for="barangay">Barangay</label>
                        <input type="text" id="barangay" class="form-control" />
                    </div>

                    <div class="col">
                        <label class="" for="city">City</label>
                        <input type="text" id="city" class="form-control" />
                    </div>

                    <div class="col">
                        <label class="" for="province">Province</label>
                        <input type="text" id="province" class="form-control" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="medical-record1"  class="d-flex justify-content-center">
        <div class="container border border-info m-5">
            <div class="m-3">
                <h5 id="medical-record" class="text-success">My Medical History</h5>
                <h6 class="text-danger fst-italic fw-light">This shows all your medical records with HMS.</h6>
            </div>

            <div id="check-ups" class="card m-3">
                <div class="m-3">
                    <h5 class="bg-success text-white p-2">History of Check-Ups</h5>
                </div>

                <div class="">
                    <h4 class="text-warning text-center">You have no record of Check-up.</h4>
                </div>
                
                
            </div>

            <div id="admissions" class="card m-3">
                <div class="m-3">
                    <h5 class="bg-success text-white p-2">History of Admissions</h5>
                </div>
                
                <div class="">
                    <h4 class="text-warning text-center">You have no record of admission.</h4>
                </div>
            </div>

            <div id="surgeries" class="card m-3">
                <div class="m-3">
                    <h5 class="bg-success text-white p-2">History of Surgeries</h5>
                </div>
                
                <div class="">
                    <h4 class="text-warning text-center">You have no record of surgery.</h4>
                </div>
            </div>
        </div>
    </div>

    <div id="appointments1" class="d-flex justify-content-center">
        <div class="container border border-info m-5">
            <div class="m-3">
                <h5 id="appointments" class="text-success">Appointment History</h5>
                <h6 class="text-danger fst-italic fw-light">Medical appointments will be viewed here.</h6>
            </div>

            <div class="card m-3" style="height: 500px;">
                
                <h6 class="text-secondary text-center mt-5">No data.</h6>
                
            </div>

        </div>
    </div>

    <div id="consultationTimeline1" class="d-flex justify-content-center">
        <div class="container border border-info m-5">
            <div class="m-3">
                <h5 id="consultationTimeline" class="text-success">Consultation Timeline</h5>
                <h6 class="text-danger fst-italic fw-light">Ordered list of your appointments and consultation.</h6>
            </div>

            <div class="card m-3" style="height: 500px;">
                
                <h6 class="text-secondary text-center mt-5">No data.</h6>
                
            </div>

        </div>
    </div>

    <div id="vaccinationrecord1" class="d-flex justify-content-center">
        <div class="container border border-info m-5">
            <div class="m-3">
                <h5 id="vaccinationrecord" class="text-success">Vaccination Record</h5>
                <h6 class="text-danger fst-italic fw-light">Vaccination and Immunization Records.</h6>
            </div>

            <div class="card m-3" style="height: 500px;">
                
                <h6 class="text-secondary text-center mt-5">No data.</h6>
                
            </div>

        </div>
    </div>

    <div id="temperaturelog1" class="d-flex justify-content-center">
        <div class="container border border-info m-5">
            <div class="m-3">
                <h5 id="temperaturelog"  class="text-success">My Temperature Logs</h5>
                <h6 class="text-danger fst-italic fw-light">This shows your everyday temperature monitoring.</h6>
            </div>

            <div class="card m-3" style="height: 500px;">
                
                <h6 class="text-secondary text-center mt-5">No data.</h6>
                
            </div>

        </div>
    </div>


    <div id="covid1" class="d-flex justify-content-center">
        <div class="container border border-info m-5">
            <div class="m-3">
                <h5 id="covid" class="text-success">COVID-19 Dashboard</h5>
                <h6 class="text-danger fst-italic fw-light">This shows the covid-19 cases.</h6>
            </div>

            <div class="card m-3">
                
                <h6 class="text-black ms-2 mt-2">Confirmed Covid-19 Cases</h6>
                <div class="row ms-5 m-2 text-center">
                    <div id="card" class="col m-2 p-3">
                        <div class="bg-light rounded shadow py-3 px-4"><img  src="images\c1.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail border border-success shadow">
                            <h5 class="text-secondary">0</h5>
                            <h6 id="text-color-h6">New Cases</h6>
                        </div>
                    </div>

                    <div id="card" class="col m-2 p-3">
                        <div class="bg-light rounded shadow bg-success py-3 px-4"><img  src="images\c2.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail border border-primary shadow">
                            <h5 class="text-secondary">4</h5>
                            <h6 id="text-color-h6">Total Active Cases</h6>
                        </div>
                    </div>

                    <div id="card" class="col m-2 p-3">
                        <div class="bg-light rounded shadow py-3 px-4"><img  src="images\c3.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail border border-danger shadow">
                            <h5 class="text-secondary">271</h5>
                            <h6 id="text-color-h6">Total Recovered</h6>
                        </div>
                                
                    </div>

                    <div id="card" class="col m-2 p-3">
                        <div class="bg-light rounded shadow py-3 px-4"><img  src="images\c4.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail border border-info shadow">
                            <h5 class="text-secondary">27</h5>
                            <h6 id="text-color-h6">Total Confirmed Cases</h6>
                        </div>
                    </div>
                </div>
            </div>
                
        

            <div class="card m-3">
                
                <h6 class="text-black ms-2 mt-2">Traced Contacts</h6>
                <div class="row ms-5 m-2 text-center">

                    <div id="card" class="col m-2 p-3">
                        <div class="bg-light rounded shadow py-3 px-4"><img  src="images\d1.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail border border-success shadow">
                            <h5 class="text-secondary">41</h5>
                            <h6 id="text-color-h6">Suspected and Probable Case</h6>
                        </div>
                    </div>

                    <div id="card" class="col m-2 p-3">
                        <div class="bg-light rounded shadow bg-success py-3 px-4"><img  src="images\d2.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail border border-primary shadow">
                            <h5 class="text-secondary">0</h5>
                            <h6 id="text-color-h6">In Quarantine</h6>
                        </div>
                    </div>

                    <div id="card" class="col m-2 p-3">
                        <div class="bg-light rounded shadow py-3 px-4"><img  src="images\d3.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail border border-danger shadow">
                            <h5 class="text-secondary">8</h5>
                            <h6 id="text-color-h6">Negative RT-PCR</h6>
                        </div>
                                
                    </div>

                    <div id="card" class="col m-2 p-3">
                        <div class="bg-light rounded shadow py-3 px-4"><img  src="images\d4.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail border border-info shadow">
                            <h5 class="text-secondary">10</h5>
                            <h6 id="text-color-h6">Total Traced Contacts</h6>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
  <!-- Footer -->
  <footer  
          id="contact-us1"
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
                                <a href="#" class="text-secondary">Weekly Timetable</a>
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