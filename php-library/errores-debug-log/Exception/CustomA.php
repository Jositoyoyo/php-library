<?php

//Custom Exception
class TooManyLoginAttemptsException extends Exception {

    public function __construct($msg, $code) {
        parent::__construct($msg, $code);
        error_log($msg, 3, '/var/www/html/Tutoriales/Tutoriales_originales_04/Php/errores-debug-log/error.log');
    }

}

class MyClass {

    public function test(array $paramenters) {
        if (count($paramenters) > 2) {
            throw new TooManyLoginAttemptsException("Too many paramenter", 100);
        }
    }

}

$params = array(
    'foo',
    'var',
    'test',
    'other'
);
$MyClass = new MyClass();
$MyClass->test($params);
