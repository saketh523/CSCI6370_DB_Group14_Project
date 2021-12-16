<?php

include 'connect.php';
if(isset($_POST['display'])){

    $Name = $_POST['Name'];
    // $ID = $_POST['ID'];
    $Mobile = $_POST['Mobile'];
    $Salary = $_POST['Salary'];


    // $sql = "insert into 'Doctors'(Name,ID,Mobile,Salary) values('$Name','$ID','$Mobile','$Salary')";
    $sql = "Select * from `Patient_Doctor` where Patient_ID = $ID";
    $result = mysqli_query($con,$sql);
    if($result){

        echo "Read the Data Successfully";

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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD OPERATIONS</title>
  </head>
  <body>
   <div class="container my-5">
        <form method = "post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" 
                placeholder = "Enter your name" name = "Name" autocomplete = "off">
            </div>
            <!-- <div class="form-group">
                <label>ID</label>
                <input type="text" class="form-control" 
                placeholder = "Enter your ID" id = "float"  name = "ID" autocomplete = "off">
            </div> -->
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" 
                placeholder = "Enter your phone number" name = "Mobile" autocomplete = "off">
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="text" class="form-control" 
                placeholder = "Enter your salary" name = "Salary" autocomplete = "off">
            </div>
            Assign a Patient:
  <select>
    <option disabled selected>-- NONE --</option>
    <?php
        include "connect.php";  // Using database connection file here
        $records = mysqli_query($db, "SELECT Patient_Name From Patients");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['Patient_Name'] ."'>" .$data['Patient_Name'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>


            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
        </form>


   
   </div>

   
  </body>
</html>



<!DOCTYPE html>
<html>
<head>
<title>CRUD Operations</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<div class = "container" my-5>
  <button class ="btn btn-primary" my-5> <a href = "user.php" class = "text-light">
    Add User </button>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Patient_Name</th>
      <th scope="col">Doc_Id</th>
      <th scope="col">Doc_Name</th>
      <th scope="col">Charge</th>
      <th scope="col">Paid_Amount</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
   
    include 'connect.php';
    $sql = "Select * from `Patient_Doctor`";
    $result = mysqli_query($con,$sql);
    if($result){

    // $row = mysqli_fetch_assoc($result);
    // echo $row['Patient_Id'];

    while($row = mysqli_fetch_assoc($result)){

      $Patient_Id = $row['Patient_Id'];
      $Doc_Id = $row['Doc_Id'];
      $Appointment = $row['Appointment'];
      $Charge = $row['Charge'];
      $Paid_Amount = $row['Paid_Amount'];
      echo '<tr>
      <th scope="row">'.$Patient_Id.'</th>
      <td>'.$Doc_Id.'</td>
      <td>'.$Appointment.'</td>
      <td>'.$Charge.'</td>
      <td>'.$Paid_Amount.'</td>
      <td>
        <button class = "btn btn-primary"><a href ="update.php? updateid = '.$Patient_Id.'" class = "text-light">Update</a></button>
        <button class = "btn btn-danger"><a href ="delete.php? deleteid = '.$Patient_Id.'" class = "text-light">Delete</a></button>

      </td>
    </tr>';

    }
   }

  ?>
  

  </tbody>
</table>
</div>
</body>
</html>