<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
//tampil dalam bentuk array
print_r($_SESSION);
echo "<br>";
//ganti nilai yg udah ada sebelumnya
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
echo "<br>";
// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo "All session variables are now removed, and the session is destroyed."

?>

</body>
</html>