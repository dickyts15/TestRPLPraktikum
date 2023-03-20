<?php
session_start();
include('server/connection.php');

if (!isset($_SESSION['logged_in'])) {
    header('location: login.php');
    exit;
}

if (isset($_GET['logout'])) {
    if (isset($_SESSION['logged_in'])) {
        unset($_SESSION['logged_in']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_photo']);
        header('location: login.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<nav class="navbar navbar-light" style="background-color:#8DCBE6">
    <img src="Images/Logo YKCID.png" alt="Logo YKCID" width="100px" height="auto" style="margin-left:20px">
    <a style="text-decoration:none; margin-right:20px" href="welcome.php?logout=1" id="logout-btn" name="logout_btn"><button class="btn btn-danger">LOGOUT</button></a>
</nav>

<body>
    <div class="box">
        <div align="center">
            <img src="Images/Welcome.png" alt="Welcome" width="750px" height="auto">
        </div>
        <div align="center">
            <h2><marquee behavior="" direction="">= = = = = = = = = = = = = = =</marquee></h2>
            <h1>WELCOME,</h1>
            <h3><?php echo $_SESSION['user_name'] ?></h3>
            <h1>Email Anda</h1>
            <h3><?php echo $_SESSION['user_email'] ?></h3>
            <h2><marquee behavior="scroll" direction="">= = = = = = = = = = = = = = =</marquee></h2>
        </div>
    </div>
</body>

<footer>
    <div class="text-center text-dark p-3" style="background-color: #9DF1DF;">
        © 2023 Copyright :
        <p>Nama : Dicky Tegar Saputra
            <br>NRP : 162021056
            <br>Kelas : BB
        </p>
    </div>
</footer>

</html>