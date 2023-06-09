
<?php

    $conn = mysqli_connect("localhost", "root", "", "hospital_management_database");
    $affectedRow = 0;
    $counter = 0;
    $repeatedDoctorNumberValue = 0;



    //VERIFY IF THE RANDOM NUMBER ALREADY EXIST IN THE DATABASE
    $query = "SELECT * FROM random_number";
    $result = $conn->query($query);
    $rowcount = mysqli_num_rows($result);

    // $query1 = "SELECT * FROM doc_reg";
    // $result1 = $conn->query($query1);

    // INSERT INTO doc_reg VALUES ('DR10000', 'anne', 'curtis', 'Dentist', 'Los Angeles', 123, 123.99, CURRENT_DATE)
    // INSERT INTO random_number VALUE (10000)
    
    for ($a = 0; $rowcount > 0; $a++){

        $randomNumber = rand(10000,79999);

        foreach($result as $data){

            if($data["randomNumber"] == $randomNumber){
                $affectedRow++;
                break;
            }else{
                $counter++;
            }

        }

        if($affectedRow == 0){

            $doctorNumber = 'DC'.$randomNumber;

            // Getting variables
            $qualification = $_POST['qualification'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $address = $_POST['address'];
            $phoneNumber = $_POST['phoneNumber'];
            $feespercall = $_POST['feespercall'];
            $paymentdue = $_POST['paymentdue'];
                
            $sql="INSERT INTO doc_on_call(doctor_number, first_name, last_name, qualification, dc_address, phone_number, fees_per_call, payment_due) 
            VALUES ('".$doctorNumber. "','".$firstName . "','" . $lastName . "','" . $qualification. "','". $address . "','" . $phoneNumber . "','" . $feespercall . "','". $paymentdue . "')";
                
            $result = mysqli_query($conn,$sql);

            $sql1="INSERT INTO random_number(randomNumber) 
            VALUE('".$randomNumber."')";

            $result1 = mysqli_query($conn,$sql1);

                echo $doctorNumber.' ';
                echo $qualification.' ';
                echo $firstName.' ';
                echo $lastName.' ';
                echo $address.' ';
                echo $phoneNumber.' ';
                echo $feespercall.' ';
                echo $paymentdue.' ';

                break;

        }



    }

    $conn->close();

?>
