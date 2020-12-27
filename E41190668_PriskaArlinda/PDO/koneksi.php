<?php
$host = "localhost";
$dbname ="list";
$username ="root";
$pass = "";
try{
    $db = new PDO("mysql: host={$host}; dbname={$dbname}", $username, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    die("Connection error : " . $exception->getMessage());
}
?>