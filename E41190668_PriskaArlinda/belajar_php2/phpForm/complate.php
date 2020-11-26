<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>.error {color: #FF0000;} </style>
</head>
<body>
    <?php
    $nameErr = $emailErr = $webErr = $genderErr = "";
    $name = $email = $web = $comment = $gender = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])) { //untuk nama yang kosong
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            //cek jika ada karakter lain yg masuk selain huruf dan spasi
            if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letter and white space allowed";
            }
        }

        if(empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "invalid email format";
            }
        }

        if(empty($_POST["website"])) {
            $web = "";
        } else {
            $web = test_input($_POST["website"]);
            if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web)) {
                $webErr = "Invalid URL";
            }
        }

        if(empty($_POST["gender"])) {
            $genderErr = "Choose one";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP FORM VALIDATION EXAMPLE</h2>
    <p><span class="error">* required field</span></p>
    <form method= "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name : <input type="text" name ="name">
    <span class= "error">* <?php echo $nameErr;?></span>
    <br><br>
    Email : <input type="text" name ="email">
    <span class= "error">* <?php echo $emailErr;?></span>
    <br><br>
    Website : <input type="text" name ="website">
    <span class= "error">* <?php echo $webErr;?></span>
    <br><br>
    Comment : <textarea name="comment" cols="30" rows="10"></textarea>
    <br><br>
    Gender :
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="male"> Male
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name ="submit" value="submit">
</form>

<h2>Your input : </h2>
<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $web;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>