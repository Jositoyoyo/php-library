<?php

final class Assert {

    private $ENABLE = true;
    private $STOP_EJECUTION = false;

    public function __construct($precondition, $line=null, $msg=null, $file=null){

      (string) $w_line = $line ? " on line " . $line . ", " : "";
      (string) $w_msg = $msg ? $msg . "<br>" : "";
      (string) $w_file = $file ? "file : " . $file . "<br>" : "";

      if($this->ENABLE === true){

        if (!$precondition) {
            echo "<hr>Assertion Failed: $w_line";
            echo $w_msg;
            echo $w_file;
            echo "<hr />";
          if($this->STOP_EJECUTION == true) exit();

          }

      }

    }

}
