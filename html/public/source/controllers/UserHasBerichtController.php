<?php
require_once 'UserHasBerichtResponse.php';
require_once 'User.php';

class UserHasBerichtController {

    public function getAll() {
        $users = User::all();
        $responseArray = [];

        foreach ($users as $user) {
            $responseArray[] = [
                'userUrl' => GetApiPath() . "/user.php?id=" . $user->id,
                'berichten' => new UserHasBerichtResponse($user->berichten())
            ];
        }

        return json_encode($responseArray);
    }

    public function getByUserId($userId) {
        $user = User::find($userId);
        if (!$user) return json_encode(['error' => 'User not found']);

        $response = new UserHasBerichtResponse($user->berichten());
        return json_encode($response);
    }
}
?>
