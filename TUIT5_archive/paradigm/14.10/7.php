<?php
//a['ism'] = 'Kamol', a['yosh'] = 22, yana shunday 3 ta to'plam mavjud ularni yoshlarini farqini aniqlang

$a['ism'][] = 'Kamol';
$a['yosh'][] = 12;

$a['ism'][] = 'Alisher';
$a['yosh'][] = 52;

$a['ism'][] = 'Vali';
$a['yosh'][] = 140; //😃😄

$a['ism'][] = 'Eshmat';
$a['yosh'][] = 28;

echo '<pre>';
print_r($a);
$i = 0;
$n = 0;
foreach ($a as $item){
    foreach ($a as $val){
        $farq = $a['yosh'][$i] - $a['yosh'][$i];
    echo "{$a['ism'][$i]} va {$a['ism'][$n]} larning farqi $farq <br>";
    $i++; $n++;}
}
