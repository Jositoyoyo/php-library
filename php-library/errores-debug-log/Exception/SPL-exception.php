<?php


class Adapter{
    public function __call($method, $options){
        $adapter = $this->getAdapter();
        if (!method_exists($adapter, $method)) {
            throw new BadMethodCallException("Unknown method '{$method}'");
        }
        //code...
    }
}

$file = '/var/www/html/Tutoriales/Tutoriales_originales_04/Php/errores-debug-log/error.log';
$adapter = new Adapter();
try {
    $adapter->getConfig();
} catch (BadMethodCallException $e) {
    //Log the error
    error_log($e->getMessage, 3, $file);
}	
