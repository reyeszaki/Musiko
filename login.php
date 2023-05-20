<?php
if(isset($_GET['message'])){
    $msg = $_GET['message'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <a href="index.php" class="back"><i class="ri-arrow-left-s-line"></i>back</a>
        <h1>Log in</h1>
        <form action="logAcc.php" method="post" onsubmit="return verifyUser()">

            <div class="main">
                <input type="text" name="username" id="username" required>
                <span></span>
                <label for="">Username</label>
            </div>

            <div class="main">
                <input type="password" name="password" id="password" required>
                <span></span>
                <label for="">Password</label>
            </div>
          
            <div class="msg">
            <?php
                if(isset($_GET['message'])){
                echo $_GET['message'];
                }
            ?>
            </div>

            <input type="submit" name="submit" value="Log In">
            <div class="pass">
                <a href="register.php">Register</a>
            </div>
        </form>
    </div>
    
    <script src="jquery.js"></script>
    <script src="js/login.js"></script>
</body>
</html>