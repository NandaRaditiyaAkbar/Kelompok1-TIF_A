<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style> .error {color: #FF0000;}</style>
</head>
<body>
<?php
    $_SESSION ["username"]= "priska";
    $_SESSION["pw"]= "pinka123";
    echo "data tersimpan";
?>
    <?php
    $usernameErr = $pwErr = "";
    $usernameErr = $pw ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["username"])){
        $usernameErr = "Isi username anda";
    } else {
        $username = test_input($_POST["username"]);
        if($_POST["username"]==$username){
            session_start();
        }
    }

    if(empty($_POST["pw"])) {
        $pwErr = "Isi Password anda";
    } else {
        $pw = test_input($_POST["pw"]);
        if ($_POST["pw"]==$pw) {
            session_start();
        }
    }
}

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function invalid(){
        echo "username atau password tidak cocok";
    }
    ?>
    <h1>LOGIN AKUN</h1>
    <p><span class="error">* required field</span></p>
    <form method= "post" action="user.php">
    USERNAME : <input type="text" name="username">
    <span class = "error">* <?php echo $usernameErr; ?> </span>
    <br><br>
    PASSWORD : <input type="password" name="pw" >
    <span class= "error">* <?php echo $pwErr; ?> </span>
    <br><br>
    <input type="submit" value="submit">
    </form>
</body>
</html>