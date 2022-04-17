<?php
  require 'vendor/autoload.php';

  $vendus = new Vendus\Api('b466e4b7ca33df8e6d372da48f0468ad');
  $documents = $vendus->documents->list();

  function filterTypeDocument(): string
  {
    $FILTER_TYPE = "ALL";

    if(isset($_GET["type"]))
    {
      $FILTER_TYPE = $_GET["type"];
      return $FILTER_TYPE;
    }

    return $FILTER_TYPE;
  }
?>