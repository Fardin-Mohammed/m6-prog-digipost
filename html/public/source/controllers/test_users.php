<?php
require_once 'controllers/UserController.php';

$controller = new UserController();

echo "GET USER BY ID:\n";
echo $controller->getUserById(1); 

echo "\n\nGET ALL USERS:\n";
echo $controller->getAllUsers();
?>
