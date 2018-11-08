<?php
/**
 * smsservice.php
 */
header("Content-Type: text/xml; charset=utf-8");
header('Cache-Control: no-store, no-cache');
header('Expires: '.date('r'));

include_once("handler.php");

ini_set("soap.wsdl_cache_enabled", "0"); // отключаем кеширование WSDL-файла для тестирования


//Создаем новый SOAP-сервер
$server = new SoapServer("http://lk.web-ali.ru/soap/api.wsdl.php");

//Регистрируем класс обработчик
$server->setClass("Handler");

//Запускаем сервер
$server->handle();