<?php

include 'connect.php';
if(isset($_POST['submit'])){

    $Name = $_POST['Name'];
    // $ID = $_POST['ID'];
    $Age = $_POST['Age'];
    $Healthcard = $_POST['Healthcard'];
    $InOutPatient = $_POST['In-Out-Patient'];
    $EID = $_POST['EID'];
    $Address = $_POST['Address'];
    $Dept_ID = $_POST['Dept_Id'];
    // echo (isset($_POST['Dept_ID']));
    $Vaccine_ID = $_POST['Vaccine_Id'];
    // $Vaccine_ID = mysqli_query($con, "SELECT Vaccine_ID From `Vaccines` where Vaccine_Name ='$Vaccine_Name' ");
    $Gender = $_POST['Gender'];
    $Occupation = $_POST['Occupation'];
    $Log_Report = $_POST['Log_Report'];



    // $sql = "insert into 'Doctors'(Name,ID,Mobile,Salary) values('$Name','$ID','$Mobile','$Salary')";
    $sql = "insert into Patients (Patient_Name,Age,Health_Card,EID,In_Out_Patient,Address,Dept_Id,Vaccine_ID,Gender,Occupation,Log_Report) values('$Name','$Age','$Healthcard','$EID','$InOutPatient','$Address','$Dept_ID','$Vaccine_ID','$Gender','$Occupation','$Log_Report')";
    $result = mysqli_query($con,$sql);
    if($result){

        echo "Data Inserted Successfully into Patients table";

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
    <h1 style="text-align:center;">Register as a Patient</h1>

  </head>
  <body background = "images/hsptl.jpg" background-size = "contain">
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
                <label>Age</label>
                <input type="text" class="form-control" 
                placeholder = "Age:" name = "Age" autocomplete = "off">
            </div>
            <div class="form-group">
                <label>Healthcard</label>
                <input type="text" class="form-control" 
                placeholder = "Do you have a health insurance" name = "Healthcard" autocomplete = "off">
            </div>
            <div class="form-group">
                <label>In-Out-Patient</label>
                <input type="text" class="form-control" 
                placeholder = "Are you a InPatient" name = "In-Out-Patient" autocomplete = "off">
            </div>
            <div class="form-group">
                <label>EID</label>
                <input type="text" class="form-control" 
                placeholder = "Enter your ID" name = "EID" autocomplete = "off">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" 
                placeholder = "Enter your Zipcode" name = "Address" autocomplete = "off">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="text" class="form-control" 
                placeholder = "Gender:" name = "Gender" autocomplete = "off">
            </div>
            <div class="form-group">
                <label>Occupation</label>
                <input type="text" class="form-control" 
                placeholder = "What is your Occupation" name = "Occupation" autocomplete = "off">
            </div>
            <div class="form-group">
                <label>Log_Report</label>
                <input type="text" class="form-control" 
                placeholder = "Have you ever tested positive earlier?" name = "Log_Report" autocomplete = "off">
            </div>
            <br>
            Choose a Department:
                <select name = "Dept_Id">
                <option disabled selected>-- NONE --</option>
                <?php
                    include "connect.php";  // Using database connection file here
                    $sql = "SELECT distinct Dept_Id From Departments";
                    $result = mysqli_query($con,$sql);  // Use select query here 

                    while($data = mysqli_fetch_array($result))
                        {
                            echo "<option value='". $data['Dept_Id'] ."'>" .$data['Dept_Id'] ."</option>";  // displaying data in option menu
                        }	
                ?>  
                </select>
            
                <br>

               Select Vaccine_id:  
                <select name = "Vaccine_Id">
                <option disabled selected>-- NONE --</option>
                <?php
                    include "connect.php";  // Using database connection file here
                    $sql = "SELECT distinct Vaccine_Id From Vaccines";
                    $result = mysqli_query($con,$sql);  // Use select query here 

                    while($data = mysqli_fetch_array($result))
                        {
                            echo "<option value='". $data['Vaccine_Id'] ."'>" .$data['Vaccine_Id'] ."</option>";  // displaying data in option menu
                        }	
                ?>  
                </select>
            
            <br> 

            <!-- Assign a Doctor:
                <select >
                <option disabled selected>-- NONE --</option>
                <!-- <?php
                    // include "connect.php";  // Using database connection file here
                    // $sql = "SELECT distinct Doc_Id From Doctors";
                    // $result = mysqli_query($con,$sql);  // Use select query here 

                    // while($data = mysqli_fetch_array($result))
                    //     {
                    //         echo "<option value='". $data['Doc_Id'] ."'>" .$data['Doc_Id'] ."</option>";  // displaying data in option menu
                    //     }	
                ?>   -->
                <!-- </select>  -->
                <br> 
            <div class="form-group" my-5>
                <label>Appointment</label>
                <input type="date" class="form-control" 
                placeholder = "Choose a date?" name = "Appointment" autocomplete = "off">
            </div>
            <div class="form-group">
                <label>Charge</label>
                <input type="number" class="form-control" 
                placeholder = "Total Charge?" name = "Charge" autocomplete = "off">
            </div>
            <div class="form-group">
                <label>Amount</label>
                <input type="number" class="form-control" 
                placeholder = "Initial Payment" name = "Amount" autocomplete = "off">
            </div>
            
    


            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
            <!-- <button type="Update" class="btn btn-primary" name = "Update">Update</button> -->
            <br>

            <br>

            <br>

            <button class ="btn btn-primary" my-5> <a href = "display.php" class = "text-light">
    View Patient Doctor Page </button>
<br>
<br>
    <button class ="btn btn-primary" my-5> <a href = "Home.html" class = "text-light">
    Home Page </button>
        </form>


   
   </div>

   
  </body>
</html>