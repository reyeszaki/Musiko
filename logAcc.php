<?php
session_start();
if (isset($_POST['submit'])) {

    //user informations 
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    $pwd_sha = sha1($pwd);

    // server informations 

    $serverIP = "69.172.204.200";
    $serverID = "reyeszaki_jreyes";
    $serverPWD = "zakireyes123";
    $serverName = "reyeszaki_cs213_project";

    $connect = mysqli_connect($serverIP, $serverID, $serverPWD, $serverName);
    $sql = "SELECT username, password FROM user_form WHERE username = '$username' AND password = '$pwd_sha'";
    $result = mysqli_query($connect, $sql);


    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }else{
        $message = "Username & password doesn't match";
        $message = urlencode($message);
        header("Location: login.php?message=$message");
    }
   
}