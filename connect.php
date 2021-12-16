<?php

$con = new mysqli('localhost','root','','DBProject');

if(!$con){

    die(mysqli_error($con));
}

?>