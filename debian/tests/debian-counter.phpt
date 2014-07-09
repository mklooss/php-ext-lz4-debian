--TEST--
test of counter
--FILE--
<?php
echo xcache_inc("count");
?>
--EXPECT--
1
