<?php

require 'vendor/autoload.php';
use Cristophersosa\FedexManuableTest\Fedex;

//Get POST data
$data = json_decode(file_get_contents('php://input'), true);

//Fedex constructor $key, $password, $account, $meter, $lenguage, $locale
$fedex = new Fedex('bkjIgUhxdghtLw9L', '6p8oOccHmDwuJZCyJs44wQ0Iw', 510087720, 119238439);

//Get rates and convert to json
echo(json_encode($fedex->getRates($data)));

?>