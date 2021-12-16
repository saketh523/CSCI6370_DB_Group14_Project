




<!DOCTYPE html>
<html>
<head>
<title>CRUD Operations</title>
<h1 style="text-align:center;">Patient Results</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href = "style.css">
</head>
<body background = "images/Result.png" background-size = "auto">


<div class = "container" my-15>
  <!-- <button class ="btn btn-primary" my-5> <a href = "user.php" class = "text-light">
    Add User </button> -->

    <table class="table" my-5>
  <thead>
    <tr>
      <th scope="col">Result_Id</th>
      <th scope="col">Patient_Id</th>
      <th scope="col">Status</th>
      
    </tr>


    <button class ="btn btn-primary" my-5> <a href = "Home.html" class = "text-light">
    Home Page </button>
  </thead>
  <tbody>

  <?php
   
    include 'connect.php';
    $sql = "Select * from `Results`";
    $result = mysqli_query($con,$sql);
    if($result){

    // $row = mysqli_fetch_assoc($result);
    // echo $row['Patient_Id'];

    while($row = mysqli_fetch_assoc($result)){

      $Result_Id = $row['Result_Id'];
      $Patient_Id = $row['Patient_Id'];
      $Status = $row['Status'];
      
      echo '<tr>
      <th scope="row">'.$Result_Id.'</th>
      <td>'.$Patient_Id.'</td>
      <td>'.$Status.'</td>
      
      
    </tr>';

    }
   }

  ?>
  

  </tbody>
</table>
</div>
</body>
</html>