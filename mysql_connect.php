<?php

$servar = "localhost";
$username = "username";
$pass  = "password";

$conn = new mysqli($servar,$username,$pass);

if($conn->connect_error){
    die("connect error".$conn-> connect_error);
}
echo"Connected";


?>