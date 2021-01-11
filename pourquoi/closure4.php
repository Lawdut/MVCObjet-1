<?php
$s = "hello";
$f = function () use (&$s) {
    echo $s;
};

$s = "how are you?";
$f(); // how are you?
?>
