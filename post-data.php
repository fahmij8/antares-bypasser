<?php
  $data = $_POST['data'];
  $endpoint = $_POST['endpoint'];
  $accesskey = $_POST['accesskey'];
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => "{$endpoint}",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{$data}",
    CURLOPT_HTTPHEADER => array(
      "X-M2M-Origin: {$accesskey}",
      "Content-Type: application/json;ty=4",
      "Accept: application/json"
    ),
  ));

  $response = curl_exec($curl);
  curl_close($curl);
  $response = json_encode($response);
  echo $response;
?>