<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>REGULAR DOCTOR DATA ENTRY PAGE</title>
</head>
<body>

<!-- Section: Design Block -->
<section class="intro ">
    <div class="bg-image" style="height: 125px;">
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
                <h6 class="fw-bold fs-5 mb-4 pt-2 pb-2 bg-info text-center rounded-2 text-danger ">Regular Doctor Registration Form</h3>

                <form action="verify-regular-doctor-data.php"  method="post">

                    <div class="row justify-content-center">
                        <div class="col-10 justify-content-center">
                            <div class="row">

                                <div class="col mb-2">
                                    <label class="form-label" for="qualification">Qualification</label>
                                    <select name="qualification" class="form-select mb-2">
                                        <option value="">Select here...</option>
                                        <option value="Anesthesiologist">Anesthesiologist</option>
                                        <option value="Cardiologist">Cardiologist</option>
                                        <option value="Dentist">Dentist</option>
                                    </select>                                    
                                </div>
                                <div class="col mb-2">

                                    <div class="form-outline">
                                    <label class="form-label" for="firstName">First Name</label>
                                    <input type="text" name="firstName" class="form-control" />
                                    
                                    </div>

                                </div>

                                <div class="col mb-2">

                                    <div class="form-outline">
                                    <label class="form-label" for="lastName">Last Name</label>
                                    <input type="text" name="lastName" class="form-control" />
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
                                        <label class="form-label" for="address">Address</label>
                                        <input type="text" name="address" class="form-control" />
                                    </div>
                                </div>

                                <div class="col mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                        <input type="number" name="phoneNumber" class="form-control" />
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
                                        <label class="form-label" for="salary">Salary</label>
                                        <input type="number" name="salary" class="form-control" />
                                    </div>
                                </div>  
                                <div class="col mb-2">

                                    <div class="form-outline datepicker">
                                    <label for="dateHired" class="form-label">Date Hired</label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        name="dateHired"
                                    />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="row justify-content-center align-items-center">
                                <input class="col-7 btn btn-success btn-lg fw-bold mt-4 mb-2" type="submit" value="CREATE ACCOUNT" />
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