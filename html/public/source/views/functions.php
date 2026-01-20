<?php
include_once 'source/ db.php';

function getAllUsers() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM user");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUserById($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM user WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getAllBerichten() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM bericht");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBerichtById($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM bericht WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
