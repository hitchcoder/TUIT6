<?php

function factorial(int $n) :int{
    $factorial = 1;
    for ($x = $n; $x>=1; $x--)
    {
        $factorial = $factorial * $x;
    }
    return $factorial;
}

function func(int $n) :float{
    $s = 0;
    for($i = $n; $i >= 1; $i--){
        $s += pow(-1, ($i -1)) * (1 / factorial (2 * $i - 1));
    }
    return number_format((float)$s, 4, '.', '');
}

echo func(1); echo "<br>";
echo func(2); echo "<br>";