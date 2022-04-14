<?php
  require 'vendor/autoload.php';

  $ID_DOCUMENT = isset($_GET["idDocument"]) == true ? $ID_DOCUMENT = $_GET["idDocument"] : $ID_DOCUMENT = "00000000";
  $url = 'https://www.vendus.pt/ws/documents/'.$ID_DOCUMENT.'/?api_key=b466e4b7ca33df8e6d372da48f0468ad';
  $apiKey = 'b466e4b7ca33df8e6d372da48f0468ad';
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($curl, CURLOPT_USERPWD, $apiKey);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($curl);
  $detailDocument = json_decode($result, true);
?>