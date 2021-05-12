<?php
    $endpoint = $_POST['endpoint'];
    $accesskey = $_POST['accesskey'];
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "{$endpoint}",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "X-M2M-Origin: {$accesskey}",
            "Content-Type: application/json;ty=4",
            "Accept: application/json"
        ),
    ));

    $response = curl_exec($curl);
    header("Access-Control-Allow-Origin: *");
    curl_close($curl);
    $response = json_encode($response);
    echo $response;
?>