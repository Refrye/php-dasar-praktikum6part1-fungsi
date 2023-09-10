<?php
function total(int|float $a, int|float $b) :int|float {
    return $a + $b;
}

$tampung = total(4.2, 2.3);
var_dump($tampung);