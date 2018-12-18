<?php

$host="localhost";
$user="db_user";
$password="db_password";
$db="db_db";

$con = mysqli_connect($host,$user,$password);
mysqli_select_db($con, $db) or die(mysqli_error($con));



?>
