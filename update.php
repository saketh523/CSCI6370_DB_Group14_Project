<?php

include 'connect.php';
// include 'display.php';
//$id = $_GET['updateid'];

$pid = ''; 
if( isset( $_GET['updateid'])) {
    $pid = $_GET['updateid']; 
} 

//$gid = isset($_GET['updateid']) ? $_GET['updateid'] : '';


if(isset($_POST['submit'])){

    $Patient_Id = $_POST['Patient_Id'];
    // $ID = $_POST['ID'];
    $Doc_Id = $_POST['Doc_Id'];
    $Appointment = $_POST['Appointment'];
    $Charge = $_POST['Charge'];
    $Paid_Amount = $_POST['Paid_Amt'];


    // $sql = "insert into 'Doctors'(Name,ID,Mobile,Salary) values('$Name','$ID','$Mobile','$Salary')";
    $sql = "update `Patient_Doctor` set  `Doc_Id` = $Doc_Id,`Appointment` ='$Appointment',`Charge` =$Charge,`Paid_Amount` =$Paid_Amount where `Patient_Id` = $Patient_Id";
    $result = mysqli_query($con,$sql);
    if($result){

        // echo "Updated  Successfully";
        header('location:display.php');

    }
    else {
        
        die(mysqli_error($con));
    }

}


?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <h1 style="text-align:center;">Update Patient Doctor Information</h1>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href = "style.css">
    <title>CRUD OPERATIONS</title>
  </head>
  <body background = "images/Patient.jpg" background-size = "cover">
   <div class="container my-5">
        <form method = "post">
            <div class="form-group">
                <label>Patient_Id</label>
                <input type="text" class="form-control" 
                placeholder = "Enter Patient Id" name = "Patient_Id" autocomplete = "off">
            </div>
            <!-- <div class="form-group">
                <label>ID</label>
                <input type="text" class="form-control" 
                placeholder = "Enter your ID" id = "float"  name = "ID" autocomplete = "off">
            </div> -->
            <div class="form-group">
                <label>Doctor_Id</label>
                <input type="text" class="form-control" 
                placeholder = "Enter Doctor Id" name = "Doc_Id" autocomplete = "off">
            </div>
            <div class="form-group">
                <label>Appointment</label>
                <input type="text" class="form-control" 
                placeholder = "Appointment" name = "Appointment" autocomplete = "off">
            </div>
            <div class="form-group">
                <label>Charge</label>
                <input type="text" class="form-control" 
                placeholder = "Charge" name = "Charge" autocomplete = "off">
            </div>
            <div class="form-group">
                <label>Paid_Amount</label>
                <input type="text" class="form-control" 
                placeholder = "Paid amount is:" name = "Paid_Amt" autocomplete = "off">
            </div>
            


            <button type="submit" class="btn btn-primary" name = "submit">Update</button>
        </form>


   
   </div>

   
  </body>
</html>
