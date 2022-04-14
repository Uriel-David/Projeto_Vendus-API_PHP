<?php
  require 'vendor/autoload.php';

  $vendus = new Vendus\Api('b466e4b7ca33df8e6d372da48f0468ad');
  $documents = $vendus->documents->list();
  $FILTER_TYPE = isset($_GET["type"]) == true ? $FILTER_TYPE = $_GET["type"] : $FILTER_TYPE = "ALL";
?>