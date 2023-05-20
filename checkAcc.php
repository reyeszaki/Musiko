<?php
$account = $_GET['user'];
$servername = "69.172.204.200";
$username = "reyeszaki_jreyes";
$password = "zakireyes123";
$dbname = "reyeszaki_cs213_project";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT username FROM user_form WHERE username = '$account'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Username is already taken";
}
?>