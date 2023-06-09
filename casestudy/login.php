<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Document</title>
</head>
<body>

<!-- Section: Design Block -->
<section class="intro text-center">
    <!-- Background image -->
    <div class="bg-image" style="height: 240px;">
        <img class="img-fluid" src="images\doctors2.jpg" alt="doctors-images">
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10 bg-warning rounded-3 pt-2 pb-2">
            <div class="card">

                <!-- <img class="img-fluid img-thumbnail w-25 h-50 position-absolute" src="images\ustp-logo.jpg" alt="doctors-images">    -->
                <div class="card-body justify-content-center align-items-center">
                    <h4 class="fw-bold mb-2 text-center">UNIVERSITY OF SCIENCE AND TECHNOLOGY OF SOUTHERN PHILIPPINES</h4>
                    <h5>HOSPITAL MANAGEMENT SYSTEM</h5>
                    <hr class="border border-info">

                    <div class="row justify-content-center text-center align-items-center">
                        <div class="col-10">
                        


                            <div class="row justify-content-center text-center align-items-center">
                                <form  action="verify-login.php" method="post" class="col-lg-7">

                                    <!--Username input -->
                                    <div class="form-outline mt-5 mb-2 ms-4 me-4">
                                        <input type="text" id="employee-id-input" name="emp_id" class="form-control text-center border border-info" />
                                        <label class="form-label fw-bold fs-6" for="employee-id-input">Employee Number</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-2 ms-4 me-4">
                                        <input type="password" id="password-input" name="pass" class="form-control text-center border border-info" />
                                        <label class="form-label fw-bold fs-6" for="password-input">Password</label>
                                    </div>

                                    <!-- Login button -->
                                    <button type="submit" class="fw-bold fs-5 btn btn-info btn-block ps-5 pe-5 mb-4">LOG IN</button>


                                        

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
    
</section>
<!-- Section: Design Block -->
</body>
</html>