<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            border-radius: 50%;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
$id = (int) $_GET["artists_id"];
$servername = "69.172.204.200";
$username = "reyeszaki_jreyes";
$password = "zakireyes123";
$dbname = "reyeszaki_cs213_project";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT name, album, year FROM artists INNER JOIN albums ON artists.id = albums.artists_id WHERE artists.id = $id ORDER BY year DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) < 0) {
    header("Location: artists.php");
}else{
    // $row = mysqli_fetch_array($result);
    // $mask = "%-30.30s  %30s\n";
    // $resultstr = "<h2>".$row['name']."</h2>";
    // $resultstr .= "<pre>";
    // $resultstr .= sprintf($mask, "Album","Year\n");
    // //$resultstr .= sprintf("%'-55s\n","");
    // $resultstr .= sprintf($mask, $row['album'], $row['year']);
    // while($row = mysqli_fetch_array($result)){
    //     $resultstr .= sprintf($mask, $row['album'], $row['year']);
    // }
    // $resultstr .= "</pre>";
    // echo $resultstr;
    // $row = mysqli_fetch_array($result);
    // $resultstr = "<h1 class='content-name'>".$row['name']."</h1>";
    echo $resultstr;
    echo "<table class='content-table'>";
    echo "<tr><th>Album</th><th>Year</th>";
    $var = FALSE;
    while($rowResult = mysqli_fetch_array($result)){
        $album = $rowResult['album'];
        $year = $rowResult['year'];

        if($var == FALSE){
        echo "<div class='feautured-artist'>";
        echo "<p style='text-align:center;'><img src='img/".$id.".jpg' width='200' height='200' class='artist-pic'></p>";
        echo "<div class='content-name'>";
        echo "<h1>".$rowResult['name']."</h1>";
        echo "</div>";
        echo "</div>";
        $var = TRUE;
        }

        echo "<tbody><tr><td>".$album."</td><td>".$year."</td></tr></tbody>";
    }
    echo "</table>";
}
?>