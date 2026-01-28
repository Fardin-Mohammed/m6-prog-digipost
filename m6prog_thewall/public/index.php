<?php
$servername = "db";
$username = "fardin";
$password = "secret123";
$dbname = "thewall_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}
echo "Connectie gelukt met de database!";
?>
