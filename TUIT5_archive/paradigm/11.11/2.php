<?php

function fun3(int $a, int $b, int $c) : bool{
    if($a < $b && $b < $c){
        return true;
    }
    return false;
}

function fun13(int $x, int $y, int $z) : bool{
    if($x + $y > $z && $x + $z > $y && $y + $z > $x){
        return true;
    }
    return false;
}

echo fun13(2, 4, 2) ? "YES" : "NO"; echo "<br>";
echo fun13(0, 1, 5) ? "YES" : "NO"; echo "<br>";