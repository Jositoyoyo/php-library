<?php

include_once 'CustomClass.php';

/* comparar dos funciones */

function sumar($val_1 =null, $val_2=null){

  if(!is_int($val_1) || $val_1 < 0){
    echo "El valor debe ser un entero o mayor a 0";
    exit();
  }
  if(!is_int($val_2) || $val_2 < 0){
    echo "El valor debe ser un entero o mayor a 0";
    exit();
  }
  return $val_1 + $val_2;

}

function sumar_2($val_1=null, $val_2=null){

  new Assert(is_int($val_1), '22', "Debe ser entero o mayor a 0", __FILE__);
  new Assert(is_int($val_2) || $val_2 >= 0, '23', "El valor debe ser un entero o mayor a 0");

  return $val_1 + $val_2;

}
echo sumar(1,3);
echo sumar_2("-1",3);
