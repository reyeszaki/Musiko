<?php
    $serverIP = "69.172.204.200";
    $serverID = "reyeszaki_jreyes";
    $serverPWD = "zakireyes123";
    $serverName = "reyeszaki_cs213_project";

    $connect = mysqli_connect($serverIP, $serverID, $serverPWD, $serverName);

session_start();
session_unset();
session_destroy();

header("Location: index.php");
?>