<?php ## 4)Создайте массив a[0] = 0, a[1] = 10, ... a[10] = 100 вычислите сумму индексов и вычитание пар индексов
//a[0] = 0, a[1] = 10, … a[10] = 100 massiv yarating indekslarini faqat toqlarini yi'gindisini va indekslari juftlarini ayirmasini hisoblang
$a = [];
$sum = 0;
$par = 0;
for ($i = 0; $i <= 10; $i++) {
    $a[] = $i * 10;
    if ($i % 2 == 0) {
        $par -= $a[$i];
    } else {
        $sum += $a[$i];
    }
}

echo "<b>sum = $sum, ayirma = $par </b>";
print_r($a);

