<?php
//По заданному натуральному числу N получить число M, записанное цифрами исходного числа, взятыми в обратном порядке.
$n = 987654321;
$m = 0;

    while ($n != 0) {
        $m = $n % 10;
        $n =  (int) ($n / 10);
        echo "$m";
    }
?>