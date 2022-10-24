<?php
//n ta indeksdan tashkil topgan massiv mavjud. Indekslar toqlar va juftlar sonini chiqaruvchi dastur tuzing
$n = 8;
$a = [];
$toq = $juft = 0;
for ($i = 0; $i < $n; $i++) {
    $a[] = rand(1, 50);
    if($a[$i] % 2 == 0)
        $juft += 1;
    else $toq += 1;
}
echo "juftlar soni: $juft toqlar soni: $toq";
echo "<pre>";
print_r($a);