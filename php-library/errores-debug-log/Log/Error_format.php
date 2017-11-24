<?php

$date = date("Y-m-d h:m:s");
$file = __FILE__;
$level = "warning";
$file = '/var/www/html/Tutoriales/Tutoriales_originales_04/Php/errores-debug-log/error.log';

$message = "[{$date}] [{$file}] [{$level}] Put your message here".PHP_EOL;
// log to our default location
error_log($message, 3, $file);

// error.log
//[2015-08-14 09:08:23] [/var/www/html/index.php] [warning] My error message here!

function logger($message, array $data, $file){    
    foreach($data as $key => $val){   
      $message = str_replace("%{$key}%", $val, $message);    
      }    
      $message .= PHP_EOL;    

    return file_put_contents($file, $message, FILE_APPEND); } 

 logger('Error nuevo en el sistema', array('error' => 'Level 3'), $file);