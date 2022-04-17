<?php
  require 'vendor/autoload.php';

  class ConnectAPI
  {
    private $urlAPI = 'https://www.vendus.pt/ws/documents/';
    private $apiKey = 'b466e4b7ca33df8e6d372da48f0468ad';
    private $ID_DOCUMENT;
    private $SEARCH_QUERY;
    private $url;
    private $curl;
    private $result;
    public $urlPDF;
    public $resultQuery;
    protected $typeRequest;
    
    public function __construct($typeRequest)
    {
      $this->typeRequest = $typeRequest;
      $this->ID_DOCUMENT = isset($_GET["idDocument"]) == true ? $ID_DOCUMENT = $_GET["idDocument"] : $ID_DOCUMENT = "00000000";
      $this->SEARCH_QUERY = isset($_GET["searchQuery"]) == true ? $SEARCH_QUERY = $_GET["searchQuery"] : $SEARCH_QUERY = null;

      if($typeRequest == "getDocument")
      { 
        $this->url = $this->urlAPI.$ID_DOCUMENT.'/?api_key=b466e4b7ca33df8e6d372da48f0468ad';
        $this->urlPDF = $this->urlAPI.$ID_DOCUMENT.'.pdf?api_key=b466e4b7ca33df8e6d372da48f0468ad';
        $this->requestAPI();
      } else if($typeRequest == "getSearchQuery")
      {
        $this->url = $this->urlAPI.'?api_key=b466e4b7ca33df8e6d372da48f0468ad&q='.$SEARCH_QUERY;
        $this->requestAPI();
      }
    }

    private function requestAPI(): void
    {
      $this->curl = curl_init($this->url);
      curl_setopt($this->curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      curl_setopt($this->curl, CURLOPT_USERPWD, $this->apiKey);
      curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
      $this->result = curl_exec($this->curl);
      $this->resultQuery = json_decode($this->result, true);
    }
  }
?>