--TEST--
testing if condition
--FILE--
<?php
if (true)
    echo 'OK';
else
    echo 'FAILED'
?>
--EXPECT--
OK
