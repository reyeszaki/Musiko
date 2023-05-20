<?php
$servername = "69.172.204.200";
$username = "reyeszaki_jreyes";
$password = "zakireyes123";
$dbname = "reyeszaki_cs213_project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("could not connect to my sql");
}
?>