
<?php

include_once "./source/views/db.php";


$request_url = explode('/', $_SERVER['REQUEST_URI']);

$controllers = ['bericht'];
foreach ($controllers as $i => $page)
{
    if($request_url[1] == $page)
    {
        include_once("./source/controllers/$page.php");
        exit;
    }
}



http_response_code(404);
exit;


function GetApiPath()
{
    $domain = $_SERVER['HTTP_HOST'];
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    $basePath = dirname($_SERVER['SCRIPT_NAME']);

    $apiBaseUrl = $scheme . "://" . $domain . $basePath;
    return $apiBaseUrl;
}
