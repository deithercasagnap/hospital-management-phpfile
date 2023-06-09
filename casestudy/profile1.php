<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PROFILE 1</title>
</head>
<body>
    
    <section id="container-main" class="justify-content-center align-items-center">
    
        <div class="container-fluid  justify-content-center align-items-center border border-info">

            <div class="row">
                <div class="col">
                    <nav  class="bg-light rounded-3 p-3 mt-4 fs-5">
                        <ol class="breadcrumb mb-0 justify-content-end gap-5 text-primary">
                            <li class="breadcrumb-item" onclick="display_home_page()">Home</li>
                            <li class="breadcrumb-item" onclick="display_patients_page()">Patients</li>
                            <li class="breadcrumb-item" onclick="display_profile_page()">Profile</li>
                            <li class="breadcrumb-item"><a class="text-decoration-none" href="login.php">Log Out</a></li>
                        </ol>
                    </nav>
                </div> 

            </div>




           <div id="home-page" class="row justify-content-center align-items-center" >
                <div class="col-5 justify-content-center align-items-center rounded-2" style=" margin-top: 150px; background: hsla(0, 10%, 80%, 0.3); backdrop-filter: blur(3px);">
                    <div class="row d-flex text-center ">
                        <div class="col">
                            <div class="row text-center">
                                <form class="col mt-5">

                                    <!--Patient number input -->
                                    <div class="form-outline mb-4 ms-4 me-4">
                                        <input type="text" id="patient_number" class="form-control text-center border border-info" />
                                        <label class="form-label fw-bold fs-5 mb-2" for="patient_number">Patient Number</label>
                                    </div>

                                    <!-- Search patient button -->
                                    <button class="fw-bold fs-5 btn btn-info btn-block ps-5 pe-5 mb-5">Search</button>


                                </form>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            

            <!-- This part is where you access the patient table under a certain doctor -->
            <?php

                $conn = new mysqli("localhost", "root", "", "hospital_management_database");

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $query = "SELECT * FROM pat_admit";
                $result = $conn->query($query);

            ?>
            <!-- until this part -->
            <div  id="patient-page" class="col d-none">   
            <table class="table table-success text-center table-striped-columns border border-success">
                <thead>
                    <tr>
                        <th class="col">Patient Number</th>
                        <th class="col">Advance Payment</th>
                        <th class="col">Mode of Payment</th>
                        <th class="col">Room Number</th>
                        <th class="col">Department Code</th>
                        <th class="col">Date of Admission</th>
                        <th class="col">Initial Condition</th>
                        <th class="col">Diagnosis</th>
                        <th class="col">Treatment</th>
                        <th class="col">Doctor Number</th>
                        <th class="col">Attendant Name</th>
                    </tr>
                </thead>


                <tbody>
                    <?php

                        if($result->num_rows > 0){
                            while ($data = $result->fetch_assoc()){
                                echo "<tr>
                                            <td>".$data["patient_number"]."</td>
                                            <td>".$data["advance_payment"]."</td>
                                            <td>".$data["mode_of_payment"]."</td>
                                            <td>".$data["room_number"]."</td>
                                            <td>".$data["department_code"]."</td>
                                            <td>".$data["date_of_admission"]."</td>
                                            <td>".$data["initial_condition"]."</td>
                                            <td>".$data["diagnosis"]."</td>
                                            <td>".$data["treatment"]."</td>
                                            <td>".$data["doctor_number"]."</td>
                                            <td>".$data["attendant_name"]."</td>
                                        </tr>";
                            }
                        }else{
                            echo "0 results";
                        }
                                
                        $conn->close();
                    ?>
                </tbody>
            </table>

            </div>


        </div>
    </section>



<script src="script.js"></script>
</body>
</html>