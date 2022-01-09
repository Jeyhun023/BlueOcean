<?php
$url         = "https://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL";
$client     = new SoapClient($url, array("trace" => 1, "exception" => 0));

$param = array('name' => 'a');
$response = $client->GetByName($param);

var_dump($response);
?>