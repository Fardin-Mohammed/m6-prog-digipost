<?php
class UserResponse {
    public $id;
    public $name;

    public function __construct($user) {
        $this->id = $user->id;
        $this->name = $user->name;
    }
}
?>
