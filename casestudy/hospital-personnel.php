<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>PATIENT DATA ENTRY PAGE</title>
</head>
<body>

<!-- Section: Design Block -->
<section class="intro ">
    <div class="bg-image" style="height: 50px;">
        <img class="img-fluid" src="images\doctors2.jpg" alt="doctors-images">
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10 bg-warning pt-2 pb-2 rounded-3">
          <div class="card">
            <div class="card-body justify-content-center align-items-center">
                
                <h4 class="fw-bold mb-2 text-center">UNIVERSITY OF SCIENCE AND TECHNOLOGY OF SOUTHERN PHILIPPINES</h2>
                <h5 class="text-center">HOSPITAL MANAGEMENT SYSTEM</h4>
                 
                <hr class="border-info">
                <h6 class="fw-bold mb-4 pt-2 pb-2 bg-info text-center rounded-2">Patient Registration Form</h3>

                <form action="">

                    <div class="row justify-content-center">
                        <div class="col-10 justify-content-center">
                            <div class="row">
                                <div class="col mb-2">

                                    <div class="form-outline">
                                    <label class="form-label" for="firstName">First Name</label>
                                    <input type="text" id="firstName" class="form-control" />
                                    
                                    </div>

                                </div>
                                <div class="col mb-2">

                                    <div class="form-outline">
                                    <label class="form-label" for="lastName">Last Name</label>
                                    <input type="text" id="lastName" class="form-control" />
                                    </div>

                                </div>

                                
                            </div>
                        </div>

                    </div>

                    <div class="row justify-content-center">
                        <div class="col-10 justify-content-center">
                            <div class="row">
                                <div class="col mb-2">

                                    <div class="form-outline">
                                        <label class="form-label" for="lastName">Age</label>
                                        <input type="text" id="lastName" class="form-control" />
                                    </div>
                                </div>
                                <div class="col mb-2">

                                    <h6>Gender: </h6>
                                        
                                        <div class="form-check form-check-inline mt-2 ms-5">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="inlineRadioOptions"
                                                id="femaleGender"
                                                value="Female"
                                            />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline mt-2">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="inlineRadioOptions"
                                                id="maleGender"
                                                value="Male"
                                            />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-10 justify-content-center">
                            <div class="row">
                                <div class="col mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="pt-phone-number">Phone Number</label>
                                        <input type="tel" id="pt-phone-number" class="form-control" />
                                    </div>
                                </div>  
                                <div class="col mb-2">

                                    <div class="form-outline datepicker">
                                    <label for="birthdayDate" class="form-label">Entry Date</label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        id="birthdayDate"
                                    />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row justify-content-center">
                        <div class="col-10 justify-content-center">
                            <div class="row">
                                <div class="col-md-6 mb-2">

                                    <div class="form-outline">
                                    <label class="form-label" for="Address">Address</label>
                                    <input type="text" id="Address" class="form-control" />
                                    </div>

                                </div>

                                <div class="col-md-6 mb-2">

                                    <div class="form-outline">
                                    <label class="form-label" for="city">City</label>
                                    <input type="text" id="city" class="form-control" />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="row justify-content-center align-items-center">
                                <input class="col-7 btn btn-success btn-lg fw-bold mt-4 mb-2" type="submit" value="GET PATIENT NUMBER" />
                            </div>
                        </div>
                    </div>

                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  
</section>
<!-- Section: Design Block -->
</body>
</html>