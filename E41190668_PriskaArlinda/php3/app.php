<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Selamat, anda berhasil login <?php echo $_SESSION['username']; ?> </h1>

    <a href="logout.php">Logout</a>
</center>
</body>
</html>