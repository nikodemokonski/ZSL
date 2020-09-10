<?php
echo PHP_VERSION, '<br>';

$potega = 2 ** 10;
echo $potega;

echo 'a'.'b'.'c'; //a+b+c wyswietli abc
echo 'a','b','c'; //wyswietli a wyswietli b wyswietli c
//operatory bitowe
// and , or |, not ~, xor ^, <<, >>

$x = 0b1010;
echo "$x<br>";
$x = $x <<1;
echo "$x<br>"; //10100(2) => 4+16=20

$x = $x >>2;
echo "$x<br>"; // => 1+4=5

//porównanie
$x = 10;
$y = 10;
echo $x <=> $y;
$result = $x <=> $y;
echo result;
?>
