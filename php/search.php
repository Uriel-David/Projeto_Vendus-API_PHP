<?php
  require 'vendor/autoload.php';

  $SEARCH_QUERY = isset($_GET["searchQuery"]) == true ? $SEARCH_QUERY = $_GET["searchQuery"] : $SEARCH_QUERY = null;
  $url = 'https://www.vendus.pt/ws/documents/?api_key=b466e4b7ca33df8e6d372da48f0468ad&q='.$SEARCH_QUERY;
  $apiKey = 'b466e4b7ca33df8e6d372da48f0468ad';
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($curl, CURLOPT_USERPWD, $apiKey);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($curl);
  $searchQuery = json_decode($result, true);
?>