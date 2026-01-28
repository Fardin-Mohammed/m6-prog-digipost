<?php
require_once 'index.php'; 
require_once 'BerichtResponse.php';

class UserHasBerichtResponse {
    public $berichtUrls = [];

    public function __construct($berichten) {
        foreach ($berichten as $b) {
            $this->berichtUrls[] = new BerichtResponse($b);
        }
    }
}
?>
