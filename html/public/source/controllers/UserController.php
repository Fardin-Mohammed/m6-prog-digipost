<?php
require_once 'UserResponse.php';
require_once 'User.php';        

class UserController {

    public function getUserById($id) {
        $user = User::find($id); 

        if (!$user) {
            return json_encode(['error' => 'User not found']);
        }
        $response = new UserResponse($user);
        return json_encode($response);
    }

    public function getAllUsers() {
        $users = User::all();

        $responseArray = array_map(function($user) {
            return new UserResponse($user);
        }, $users);

        return json_encode($responseArray);
    }
}
?>
