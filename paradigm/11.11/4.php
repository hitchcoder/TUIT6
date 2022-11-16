<?php

$a = [];
function avg($n, $a, $k, $l){
    $s = 0;
    for ($i = 0; $i < $n; $i++){
        if ($i >= $k && $i <= $l){
            $s += $a[$i-1];
        }
    }

    return $s / ($l - $k + 1);
}
$a = [38, 39, 41];
echo avg(3, $a, 1, 2); echo "<br>";

$a = [6, 93, 73, 62, 26, 28, 65, 74, 53, 59];
echo avg(10, $a, 8, 9); echo "<br>";