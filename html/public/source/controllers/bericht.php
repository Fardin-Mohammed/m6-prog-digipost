<?php


//echo "bericht";

//if($_SERVER['REQUEST_METHOD'] === 'GET'){
 //   echo "Dit is een GET- verzoek.";
    

//if (isset($_GET['naam'])) {
//    echo
//}
//}


/////////////////////////////////////////////////////////////////////////////////

//if($_SERVER['REQUEST_METHOD'] == 'GET') {
    
//$response = [
  //  "status" => "succes",
    //"timestamp" => date("Y-m-d H:i:s"),
    //"data" => [
      //  "message" => "This is a response to a GET response"
    //]
//];

//header('Content-Type: application/json; charset=utf-8');

//echo json_encode($response);

//exit;

//}else{
  //  echo "Dit is geen GET verzoek.";
//}

//////////////////////////////////////////////////////////////////////////////

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Content-Type: application/json; charset=utf-8');
    
    $berichten = [
        1 => ["titel" => "Eerste bericht", "inhoud" => "Nieuwe functies zijn live"]
    ];


    if(isset($_GET['id'])) {
        $id = (int)$_GET['id'];

        if(array_key_exists($id, $berichten)) {
            echo json_encode([
                "status" => "succes",
                "data" => $berichten[$id]
            ]);
        }else{
            http_response_code(404);
            echo json_encode(["error" => "Bericht met $id niet gevonden"]);
        }
    } else {
        echo json_encode([
            "status" => "succes",
            "count" => count($berichten),
            "data" => $berichten
        ]);
    }
    exit;
    } else {
        header('Content-Type: application/json');
        http_response_code(405);
        echo json_encode(["error" => "Alleen GET request zijn toegestaan"]);
        exit;
    }
?>