<?php
/**
 * /client.php
 */
header("Content-type:text/html; charset=utf-8");

header('Cache-Control: no-store, no-cache');
header('Expires: '.date('r'));


ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);

// создаем объект для отправки на сервер
phpinfo();
exit;

$client = new SoapClient('http://lk.web-ali.ru/soap/api.wsdl.php');


$out = $client->say("Ali");


var_dump($out);


