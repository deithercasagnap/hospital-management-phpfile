
<?php
    // Getting variables
    $qualification = $_POST['qualification'];

    // Comparing answer


    if($qualification == 'DR'){
        header('location:regular-doctor.php');

    }else if($qualification == 'DC'){
        header('location:oncall-doctor.php');

    }else{
        echo '>>>>>> ERROR: PLEASE SELECT A DOCTOR STATUS';
    }                

?>
