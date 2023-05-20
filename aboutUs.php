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
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/about2.css">

  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  
  
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
      <!----Home--->
      <div class="about">
        <div class="aboutUs">
            <h1>About Us</h1>
            <h2>Jean Zachary Reyes</h2>
            <h2>Developer</h2>
            <h3>
            I developed a website dedicated to helping users discover new artists and explore their albums. The development of this platform allowed me to challenge myself and hone my skills in web development, resulting in a functional and engaging user interface that caters to music enthusiasts.
            </h3>
        </div>
      </div>

        <!----footer--->
      <section class="contact" id="contact">
        <div class="main-contact">
          <h3>MusiKo</h3>
          <h5>Copyrights 2022 - Developed by Jean Zachary Reyes</h5>
        </div>
      </section>

      <script src="https://unpkg.com/scrollreveal"></script>

  <script src="js/index.js"></script>

</body>
</html>