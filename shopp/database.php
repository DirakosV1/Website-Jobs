<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "shop";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Les informations ne correspondent pas !");
}

?>