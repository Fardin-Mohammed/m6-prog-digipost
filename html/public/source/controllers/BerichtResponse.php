<?php
require_once 'index.php';

class BerichtResponse {
    public $url;

    public function __construct($bericht) {
        $this->url = GetApiPath() . "/bericht.php?id=" . $bericht->id;
    }
}
?>
