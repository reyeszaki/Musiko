<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/register.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    

</head>
<body>
    
    <div class="container">
        <a href="index.php" class="back"><i class="ri-arrow-left-s-line"></i>back</a>
        <form action="createAcc.php" method="post" onsubmit="return formValidation()">

            <div class="main">
                <input type="text" name="username" id="username" onkeyup="verifyUser()" required>
                <span></span>
                <label for="">Username</label>
            </div>
            <p class="userTaken"></p>
            <p id="userValid"></p>
        <!--
            <p id="user">letters/numbers/_.-| max 25 chars</p>
        -->
            <div class="main">
                <input type="password" name="password" id="pwd" required>
                <span></span>
                <label for="">Password</label>
            </div>
        <!--
            <p id="pass">any 4 - 200 chars</p>
        -->
            <div class="main">
                <input type="password" name="cpassword" id="cpwd" onkeyup="pwdValid()" required>
                <span></span>
                <label for="">Confirm Password</label>
            </div>
            <p class="pwd"></p>
        <!--
            <p id="confirmPass">retype password</p>
        -->
            <div class="main">
                <input type="text" name="fname" id="fname" required>
                <span></span>
                <label for="">First Name</label>
            </div>
            <p class="fnameValid"></p>

            <div class="main">
                <input type="text" name="lname" id="lname" required>
                <span></span>
                <label for="">Last Name</label>
            </div>
            <p class="lnameValid"></p>

            <input type="submit" name="submit" value="Register">

        </form>
    </div>

    <script src="jquery.js"></script>
    <script src="js/register.js"></script>
</body>
</html>