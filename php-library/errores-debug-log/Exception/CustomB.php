<?php

//Custom Exception
class TooManyLoginAttemptsException extends Exception {

    public function __construct() {
        parent::__construct('No File Fopen', 100);
    }

}

/////////////////
try {
    $fope = fopen('test.php', 'r');
} catch (TooManyLoginAttemptsException $ex) {
    print $ex->getMessage();
    error_log($ex->getMessage() . "\n", 3, '/var/www/html/Tutoriales/Tutoriales_originales_04/Php/errores-debug-log/error.log');
}
