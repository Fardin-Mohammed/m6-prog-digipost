<?php
require_once 'BerichtResponse.php';
require_once 'Bericht.php';

class BerichtController {

    public function getBerichtById($id) {
        $bericht = Bericht::find($id);
        if (!$bericht) return json_encode(['error' => 'Bericht not found']);

        $response = new BerichtResponse($bericht);
        return json_encode($response);
    }

    public function getAllBerichten() {
        $berichten = Bericht::all();
        $responseArray = array_map(fn($b) => new BerichtResponse($b), $berichten);
        return json_encode($responseArray);
    }
}
?>
