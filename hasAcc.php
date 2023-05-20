<?php
$account = $_GET['user'];
$pwd = $_GET['password'];
$servername = "69.172.204.200";
$username = "reyeszaki_jreyes";
$password = "zakireyes123";
$dbname = "reyeszaki_cs213_project";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT username FROM user_form WHERE username = '$account' AND password = '$pwd'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    //echo "Username & password combination doesn't match.";
}
?>