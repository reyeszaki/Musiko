<?php
session_start();
if (isset($_POST['submit'])) {

    //user informations 
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $pwd_sha = sha1($pwd);
    // server informations 

    $serverIP = "69.172.204.200";
    $serverID = "reyeszaki_jreyes";
    $serverPWD = "zakireyes123";
    $serverName = "reyeszaki_cs213_project";

    $connect = mysqli_connect($serverIP, $serverID, $serverPWD, $serverName);
    $sql = "INSERT INTO user_form (username, password, fname, lname)  VALUES('$username', '$pwd_sha','$fname', '$lname')";
    mysqli_query($connect, $sql);

    header("Location: login.php");
}