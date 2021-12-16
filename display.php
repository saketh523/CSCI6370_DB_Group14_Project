




<!DOCTYPE html>
<html>
<head>
<title>CRUD Operations</title>
<h1 style="text-align:center;">View Patient Doctor</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href = "style.css">
</head>
<body background = "images/3.jpg" background-size = "contain">


<div class = "container" my-15>
  <!-- <button class ="btn btn-primary" my-5> <a href = "user.php" class = "text-light">
    Add User </button> -->

    <table class="table" my-5>
  <thead>
    <tr>
      <th scope="col">Patient_Id</th>
      <th scope="col">Doc_Id</th>
      <th scope="col">Appointment</th>
      <th scope="col">Charge</th>
      <th scope="col">Paid_Amount</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>


  <button class ="btn btn-primary" my-5> <a href = "Home.html" >
      Home Page</button>
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