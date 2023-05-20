<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MusiKo - Tracks</title>
  <link rel="stylesheet" href="css/index2.css">

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
      <section class="featured" id="featured">
    <div class="center-text">
      <h2>Albums</h2>
    </div>

    <div class="featured-content">
      <div class="row">
        <img src="img/her_loss.jpg" width="300" height="300">
        <div class="fea-text">
          <h5>Her Loss</h5>
          <p>Drake</p>
        </div>
        <div class="arrow">
         <a href="https://open.spotify.com/album/5MS3MvWHJ3lOZPLiMxzOU6"><i class="ri-play-circle-line"></i></a>
        </div>
      </div>

      <div class="row">
        <img src="img/The_Weeknd_-_After_Hours.jpg">
        <div class="fea-text">
          <h5>After Hours</h5>
          <p>The Weeknd</p>
        </div>
        <div class="arrow">
         <a href="https://open.spotify.com/album/4yP0hdKOZPNshxUOjY0cZj?highlight=spotify:track:2p8IUWQDrpjuFltbdgLOag"><i class="ri-play-circle-line"></i></a>
        </div>
      </div>

      <div class="row">
        <img src="img/melodic.jpg" width="300" height="300">
        <div class="fea-text">
          <h5>The Melodic Blue</h5>
          <p>Baby Keem</p>
        </div>
        <div class="arrow">
         <a href="https://open.spotify.com/album/5Co3CGD9lBQVNnn7q0px1g"><i class="ri-play-circle-line"></i></a>
        </div>
      </div>

      <div class="row">
        <img src="img/blond.jpg" width="300" height="200">
        <div class="fea-text">
          <h5>Blonde</h5>
          <p>Frank Ocean</p>
        </div>
        <div class="arrow">
         <a href="https://open.spotify.com/album/3mH6qwIy9crq0I9YQbOuDf"><i class="ri-play-circle-line"></i></a>
        </div>
      </div>

      <div class="row">
        <img src="img/gemini.jpg" width="300" height="300">
        <div class="fea-text">
          <h5>Gemini Rights</h5>
          <p>Steve Lacy</p>
        </div>
        <div class="arrow">
         <a href="https://open.spotify.com/album/3Ks0eeH0GWpY4AU20D5HPD"><i class="ri-play-circle-line"></i></a>
        </div>
      </div>

      <div class="row">
        <img src="img/wasteland.jpg" width="300" height="300">
        <div class="fea-text">
          <h5>WASTELAND</h5>
          <p>Brent Faiyaz</p>
        </div>
        <div class="arrow">
         <a href="https://open.spotify.com/album/0PHMNbcgHfzSUALlfk7wGg"><i class="ri-play-circle-line"></i></a>
        </div>
      </div>

    </div>
  </section>

        <!----footer--->
      <section class="contact" id="contact">
        <div class="main-contact">
          <h3>MusiKo</h3>
          <h5>Copyrights 2022 - Developed by Jean Zachary Reyes</h5>
        </div>
      </section>

  <script src="js/index.js"></script>

</body>
</html>