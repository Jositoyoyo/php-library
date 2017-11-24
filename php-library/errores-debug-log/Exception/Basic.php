<?php

error_reporting(0);
$file = '/var/www/html/Tutoriales/Tutoriales_originales_04/Php/errores-debug-log/error.log';

try{
    if(true){
        throw new Exception("Something failed \n", 900);
    }
} catch (Exception $e) {    
    $datetime = new DateTime();     
    $datetime->setTimezone(new DateTimeZone('UTC'));  
    $logEntry = $datetime->format('Y/m/d H:i:s') . '/' .   $e->getMessage(). '/' .        
        $e->getCode() . '/' .        
        $e->getFile() . '/' .        
        $e->getLine() . "\n";   
     // log to default error_log destination    
    error_log($logEntry, 3, $file);   
    //Email or notice someone 
}

