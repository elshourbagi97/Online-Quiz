<?php
// session_start();
$server_host="localhost";
$username="root";
$password="123456789";
$db="quiz";

$conn=mysqli_connect($server_host,$username,$password,$db);
if($conn==="false"){
    die("There is an error in the connection".mysqli_connect_error());
}
 ?>