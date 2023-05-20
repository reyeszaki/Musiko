<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusiKo</title>

    <link rel="stylesheet" href="css/index2.css">

<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

<script>
    function showAlbums(str){
    var xhttp = new XMLHttpRequest();

    if(str == ""){
        document.getElementById("albums").innerHTML="";
        return;
    }

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("albums").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "findAlbums.php?artists_id="+str, true);
    xhttp.send();
}
</script>
</head>

<body>
    <!----Header--->
<header class="sticky">
  <a href="index.php" class="logo"><i class="ri-music-fill"></i><span>MusiKo</span></a>

  <ul class="navbar">
      <li><a href="index.php" class="active">Home</a></li>
      <li><a href="aboutUs.php" class="active">About Us</a></li>
      <li><a href="artists.php" class="active">Artists</a></li>
      <li><a href="tracks.php" class="active">Tracks</a></li>
      <li><a href="contact.php" class="active">Contact</a></li>
  </ul>

  <div class="main">
    <?php 
    if(!isset($_SESSION['username'])){
      echo "<a href='login.php' class='user'><i class='ri-user-line'></i>Sign In</a>";
      echo "<a href='register.php'>Register</a>";
    }else{
      echo "<a href='profile.php' class='user'>".$_SESSION['username']."</a>";
      echo "<a href='logout.php'>Log Out</a>";
    }
    ?>
      <div class="bx bx-menu" id="menu-icon"></div>
  </div>

</header>

<section class="artists">
    <div class="name">
        <form>
            <h1>Discover Artists:</h1>
            <?php
            $servername = "69.172.204.200";
            $username = "reyeszaki_jreyes";
            $password = "zakireyes123";
            $dbname = "reyeszaki_cs213_project";
            
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            $result = (mysqli_query($conn, "SELECT id, name FROM artists"));
            if(mysqli_num_rows($result)>0){
                $select = '<select name="artists_id" onchange="showAlbums(this.value)">';
                $select .= '<option value = "">Select an artist:</option>';
                while($row = mysqli_fetch_array($result)){
                    $select .='<option value="'.$row['id'].'">'.$row['name'].'</option>';
                }
                mysqli_free_result($result);
                mysqli_close($conn);
            }
            $select .= '</select>';
            echo $select;
            ?>
        </form>
        <div id="albums"></div>
    </div>
</section>

    <script src="jquery.js"></script>
    <script src="js/artists.js"></script>

</body>

</html>