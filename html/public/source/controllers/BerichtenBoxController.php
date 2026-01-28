<?php
require_once 'UserHasBerichtResponse.php';
require_once 'User.php';

class BerichtenBoxController {

    public function getUserBerichten($userId) {
        $user = User::find($userId);
        if (!$user) return json_encode(['error' => 'User not found']);

        $response = new UserHasBerichtResponse($user->berichten());
        return json_encode($response);
    }
}
?>
