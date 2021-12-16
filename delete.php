<?php

include 'connect.php';

    $sql = "delete from `Patient_Doctor` where Patient_Id = 3 ";
    $result = mysqli_query($con,$sql);
    if($result){

        // echo "Deleted Successfully";

        header('location:display.php');
    }
    else {

        echo "not working";
        // die(mysqli_error($con));
    }

?>


