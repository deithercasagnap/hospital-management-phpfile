
<?php

    $conn = mysqli_connect("localhost", "root", "", "hospital_management_database");

    // Getting variables
    $pass = $_POST['pass'];
    $emp_id = $_POST['emp_id'];

    // Comparing answers


    try {

        $query = "SELECT * FROM admin_server WHERE doctor_number = '$emp_id' AND emp_password = '$pass'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {

            while ($data = $result->fetch_assoc()){ 

                    if($data["doctor_number"] == $emp_id AND $data["emp_password"] == $pass){
                        header('location:profile1.php');

                    }

            }
        } else {

        echo 'ERROR: Seems like you didnt put the correct answer. Please try again';
        exit;

        }
    } 
    
    catch(PDOException $e) {

        echo 'ERROR: ' . $e->getMessage();

    }


    $conn->close();

?>
