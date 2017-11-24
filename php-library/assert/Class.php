<?php
// Active assert and make it quiet
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1);
assert_options(ASSERT_BAIL, 0);
assert_options(ASSERT_CALLBACK, 'assert_handler');

function assert_handler($file, $line, $code){
    echo "<hr>Assertion Failed:
        File '$file'<br />
        Line '$line'<br />
        Code '$code'<br /><hr />";
}


// Make an assertion that should fail
assert('mysql_query("")');
assert(2==3); //nothing


/**
 * Test
 */
class ClassName
{

  function __construct()
  {
    assert(2==3);
  }
}

new ClassName();
