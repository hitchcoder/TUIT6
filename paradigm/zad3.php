<?php

function calc($b, $x, $t){
    if($b < 1){
        return pow($t, $x) * $x + pow($x, $b) +$b;
    } else if($b == 1){
        return $b + $t +$x;
    } else if($b > 1){
        return $b * $x + pow(($x + $b + $t), 1/2);
    }
}

echo calc(1, 2, 3); echo "<br>";
echo calc(5, 6, 8);