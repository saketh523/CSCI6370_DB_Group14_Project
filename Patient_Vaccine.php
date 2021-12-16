<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Patient Vaccine Info</title>
  </head>
  <body>
   <div class="container my-5">
        <form method = "post">
            
            Patient_Id:
  <select name = "Patient_Id">
    <option disabled selected>-- NONE --</option>
    <?php
        include "connect.php";  // Using database connection file here
        $sql =  "SELECT Patient_Id From Patients";  // Use select query here 
        $result = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($result))
        {
            // echo "<option value='". $data['Patient_Id'] ."'>" .$data['Patient_Id'] ."</option>";  // displaying data in option menu
            $Patient_Id = $row['Patient_Id'];
        }	
    ?>  
  </select>
        
        </form>


   
   </div>

   <div class = "container" my-5>
  

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Patient_Name</th>
      <th scope="col">Vaccination_status</th>
      <th scope="col">Age</th>
      <th scope="col">Result</th>
     
    </tr>
  </thead>
  <tbody>

  <?php
   
    include 'connect.php';
    $sql = "Select * from `Patient` inner join `Vaccines` on Vaccines.Vaccine_Id = Patient.Vaccine_Id";
    $result = mysqli_query($con,$sql);
    if($result){

    // $row = mysqli_fetch_assoc($result);
    // echo $row['Patient_Id'];

    while($row = mysqli_fetch_assoc($result)){

      $Patient_Name = $row['Patient_Name'];
      $Vaccination_status = $row['Vaccination_status'];
      $Age = $row['Age'];
      $Result = $row['Result'];
      echo '<tr>
      <th scope="row">'.$Patient_Name.'</th>
      <td>'.$Vaccination_status.'</td>
      <td>'.$Age.'</td>
      <td>'.$Result.'</td>
      
    </tr>';

    }
   }

  ?>
  

  </tbody>
</table>
</div>
</body>
</html>

   
  </body>
</html>