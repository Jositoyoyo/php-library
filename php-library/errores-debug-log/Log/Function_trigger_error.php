<?php

function foo($email) {
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        trigger_error('Supplied value is not a valid email', E_USER_WARNING);
        return;
    }    
}

foo('jositoyoyo');

