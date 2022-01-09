<?php


// Parameterized string.
$quantity = 5;
$fruit = "apple(s)";
$format = "I ate %d %s.\n";
$msg = sprintf($format, $quantity, $fruit);
echo $msg;

?>