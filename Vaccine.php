<?php

include 'connect.php';
if(isset($_POST['submit'])){

    $Name = $_POST['Name'];
    // $ID = $_POST['ID'];
    $Cost = $_POST['Cost'];
    $Dose = $_POST['Dose'];
    $Vaccination_Status = $_POST['Vaccination_Status'];


    // $sql = "insert into 'Doctors'(Name,ID,Mobile,Salary) values('$Name','$ID','$Mobile','$Salary')";
    $sql = "insert into Vaccines (Vaccine_Name,Cost,Dose_Number,Vaccination_status) values('$Name','$Cost','$Dose','$Vaccination_Status')";
    $result = mysqli_query($con,$sql);
    if($result){

        echo "Data Inserted Successfully into Vaccines table";

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
    <h1 style="text-align:center;" class = "text-light">Add a Vaccine</h1>
    <title>CRUD OPERATIONS</title>
  </head>
  <body background = "images/Vaccine.png" background-size = "contain">
   <div class="container my-5">
        <form method = "post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" 
                placeholder = "Enter name of the Vaccine"  name = "Name" autocomplete = "off">
            </div>
            <!-- <div class="form-group">
                <label>ID</label>
                <input type="text" class="form-control" 
                placeholder = "Enter your ID" id = "float"  name = "ID" autocomplete = "off">
            </div> -->
            <div class="form-group">
                <label>Cost </label>
                <input type="text" class="form-control" 
                placeholder = "Enter the cost of the vaccine" name = "Cost" autocomplete = "off" >
            </div>
            <div class="form-group">
                <label>Dose</label>
                <input type="text" class="form-control" 
                placeholder = "Which dose is this" name = "Dose" autocomplete = "off">
            </div>
            <div class="form-group">
                <label>Vaccination_Status</label>
                <input  type="text" class="form-control" 
                placeholder = "Vaccination Status" name = "Vaccination_Status" autocomplete = "off">
            </div>



            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>

<br>
<br>

            <button class ="btn btn-primary" my-5> <a href = "Home.html" class = "text-light">
    Home Page </button>
        </form>


   
   </div>

   
  </body>
</html>