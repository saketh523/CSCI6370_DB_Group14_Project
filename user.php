<?php

include 'connect.php';
if(isset($_POST['submit'])){

    $Name = $_POST['Name'];
    // $ID = $_POST['ID'];
    $Mobile = $_POST['Mobile'];
    $Salary = $_POST['Salary'];


    // $sql = "insert into 'Doctors'(Name,ID,Mobile,Salary) values('$Name','$ID','$Mobile','$Salary')";
    $sql = "insert into Doctors (Doc_Name,Phone_number,Salary) values('$Name','$Mobile','$Salary')";
    $result = mysqli_query($con,$sql);
    if($result){

        echo "Data Inserted Successfully into Doctors table";

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
    <link rel="stylesheet" href = "style.css">

    <title>CRUD OPERATIONS</title>
    <h2 style="text-align:center;">ADD A DOCTOR</h2>
  </head>
  <body background = "images/backgroundimg.jpeg" background-size = "cover">
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
        $sql =  "SELECT Patient_Name From Patients";  // Use select query here 
        $result = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($result))
        {
            echo "<option value='". $data['Patient_Name'] ."'>" .$data['Patient_Name'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
            <br>
            <br>
            <br>


            <button  type="submit" class="btn btn-primary" name = "submit">Submit</button>
            <br>
            <br>
            <br>

            <button class ="btn btn-primary" my-5> <a href = "Patient.php" >
    Add a Patient </button>
<br>

<br>


    <button class ="btn btn-primary" my-5> <a href = "Home.html" >
    Home Page </button>
        </form>


   
   </div>

   
  </body>
</html>