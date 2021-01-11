<?php
$s = "hello";
$f = function () use($s) {
    echo $s;
};
$s ="ta soeur";
$f();
?>
