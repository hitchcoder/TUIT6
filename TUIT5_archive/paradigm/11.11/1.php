<?php
function osnova(int $U, int $R) :float{
    $I = $U / $R; //tok kuchi
    return number_format((float)$I, 3, '.', '');
}

echo osnova(8, 7); echo '<br>';
echo osnova(6, 1); echo '<br>';
echo osnova(100, 3); echo '<br>';