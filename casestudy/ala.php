<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>

    <div class="d-flex justify-content-center">
        <div class="container border border-info m-5">
            <div class="m-3">
                <h5>Personal Health Record</h5>
                <div class="" style="width: 300px;">
                    <div class="row d-flex align-items-center">
                        <label class="col fs-6" for="firstName">Patient Number</label>
                        <input type="text" id="firstName" class="col form-control border border-none" />
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








    
    <div class="d-flex justify-content-center">
        <div class="container border border-info m-5">
            <div class="m-3">
                <h5>My Medical History</h5>
            </div>

            <div class="card m-3">
                <div class="m-3">
                    <h5 class="bg-success text-white p-2">History of Check-Ups</h5>
                </div>

                <div class="">
                    <h4 class="text-warning text-center">You have no record of Check-up.</h4>
                </div>
                
                
            </div>

            <div class="card m-3">
                <div class="m-3">
                    <h5 class="bg-danger text-white p-2">History of Admissions</h5>
                </div>
                
                <div class="">
                    <h4 class="text-warning text-center">You have no record of admission.</h4>
                </div>
            </div>

            <div class="card m-3">
                <div class="m-3">
                    <h5 class="bg-danger text-white p-2">History of Surgeries</h5>
                </div>
                
                <div class="">
                    <h4 class="text-warning text-center">You have no record of surgery.</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class="container border border-info m-5">
            <div class="m-3">
                <h5 class="text-success">My Temperature Logs</h5>
                <h6 class="text-danger fst-italic fw-light">This shows your everyday temperature monitoring.</h6>
            </div>

            <div class="card m-3" style="height: 500px;">
                
                <h6 class="text-secondary text-center mt-5">No data.</h6>
                
            </div>

        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class="container border border-info m-5">
            <div class="m-3">
                <h5 class="text-success">Vaccination Record</h5>
                <h6 class="text-danger fst-italic fw-light">Vaccination and Immunization Records.</h6>
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

    <div id="consultationTimeline1" class="d-flex justify-content-center">
        <div class="container border border-info m-5">
            <div class="m-3">
                <h5 id="consultationTimeline" class="text-success">COVID-19 Dashboard</h5>
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


</body>
</html>