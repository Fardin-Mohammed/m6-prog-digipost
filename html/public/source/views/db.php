<?php
$host = "mysql";
$dbname = "m6prog";
$user = "m6proggebruiker";
$pass = "ikben89die@guy";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}