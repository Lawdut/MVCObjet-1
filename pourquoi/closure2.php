<?php
$s = "hello";
$f = function () use($s) {
    echo $s;
};

$f();
?>
