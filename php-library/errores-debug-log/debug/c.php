<?php

class a {
    public function __construct(b $b) {
        $var = $b->foo();
        debug::exec();
    }
    public function getVar() {
        
    }
}

class b {
    public function foo() : string {
        return 'foo';
    }   
}

class debug {
    static public function exec() {
       debug_print_backtrace();
  
    }
}

$a = new a(new b());




