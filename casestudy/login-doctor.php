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
    <link rel="stylesheet" href="login-doctor-style.css">
    <title>Doctor Login Page</title>
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
                <a class="nav-link fw-bold" href="landingPage.php">Home</a>
                </li>

                <li class="nav-item ms-2">
                <a class="nav-link fw-bold" href="landingPage.php">About Us</a>
                </li>

                <li class="nav-item ms-2">
                <a class="nav-link fw-bold" href="landingPage.php">Our Team</a>
                </li>

                <li class="nav-item ms-2">
                <a class="nav-link fw-bold" href="landingPage.php">Contact Us</a>
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


<div id="loginpage" class=" " style="margin-top: 120px;">

    <div class="col d-flex justify-content-center">
                <div id="login-container" class="rounded-4" style="width:27rem">
                    <div class="card row">
                        <div class="">
                            
                            <div class="d-flex justify-content-center mt-4">
                                <img src="images\doctors-icon.jpg" alt="" width="120" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">    
                            </div>
                            <h6 class="text-center fw-bold fs-5 ms-2">Hi, Doc! Let's go treat some patients.</h6>

                        </div>
                        
                        <div>
                            <div class="row d-flex justify-content-center mb-3">

                                <div class="col-11  m-2 d-flex justify-content-center mt-3">
                                    <div class="row">
                                        <div class="col-1 text-secondary d-flex align-items-center me-1">
                                            <i class="fa-regular fa-user"></i>
                                        </div>
                                        <input class="col rounded-4 border border-none p-2 ps-3 fs-6" style="width:20rem;" type="text" placeholder="Doctor's Number">
                                    </div>
                                </div>

                                <div class="col-11 m-2  d-flex justify-content-center">
                                    <div class="row">
                                            <div class="col-1 text-secondary d-flex align-items-center me-1">
                                                <i class="fa-solid fa-unlock-keyhole"></i>
                                            </div>
                                            <input class="col rounded-4 border border-none p-2 ps-3 fs-6" style="width:20rem;" type="password" placeholder="Password">
                                    </div>
                                    </div>

                                <div class="col-11 m-2 d-flex justify-content-center">
                                    <p class="text-center ps-3 mt-2">By logging in, you agree to the <span id="span">Terms of Conditions</span> and <span id="span">Privacy Policy</span>  of <a href="#loginpage">USTP-HMS</a>.</p>
                                </div>

                                <div  class="col-11 d-flex justify-content-center mb-2">
                                    <a id="login-button" class="ms-3 rounded-5 border border-success p-2 fw-bold fs-5 text-center" style="width:12rem" href="doctor-page.php">Log In</a>
                                </div>
   
                            </div>    
                            
                            
                        </div>
                        

                        
        
                    </div>  
                    <div class="mt-1">
                                <h6 class="fw-light fs-6 text-secondary">Powered by: <span id="span">Digital Transformation Office</span> | <span id="span">Terms of Conditions</span> | <span id="span">Privacy Policy</span> | <span id="span">V-build: 1.0.0</span></h6>
                                <h6 class="fw-light text-secondary">Copyright © 2023 USTP-HMS. All rights reserved.</h6>
                        </div>             
                </div>
    
            </div>

</div>

<script src="https://kit.fontawesome.com/yourcode.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="landingPage-script.js"></script>
</body>
</html>