<?php

function g($b, $x)
{
    if ($b * $x < 1) {
        return $b * $x - log10($b * $x);
    } else if($b * $x > 1) {
        return $b * $x + log10(sqrt($x));
    }
}

echo $g = g(1,2);

//0<x * a && x *a < 10