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
    <div class="bg-image" style="height: 170px;">
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
                <h6 class="fw-bold fs-5 mb-4 pt-2 pb-2 bg-info text-center rounded-2">Doctor Registration Form</h3>

                <form action="verify-choose-prefix.php" method="post">

                    <div class="row justify-content-center mt-5">
                        <div class="col-10 justify-content-center">
                            <div class="row justify-content-center">
                                <div class="col-6 mb-2">
                                    <label class="form-label" for="qualification">DOCTOR STATUS</label>
                                    <select name="qualification" class="form-select mb-2">
                                        <option value="">Select the Doctor status here...</option>
                                        <option value="DR">Regular Doctor</option>
                                        <option value="DC">On-call Doctor</option>
                                    </select>                                    
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="row justify-content-center align-items-center">
                                <input class="col-7 btn btn-success btn-lg fw-bold mt-4 mb-2" type="submit" value="GENERATE FORM" />
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