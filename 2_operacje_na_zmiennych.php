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
echo "$result<hr>";

$x=10;
$y=10.0;

if($x===$y){
  echo 'Zmienne są identyczne<br>';
}
else {
  echo 'Zmienne są nieidentyczne<br>';
}

echo gettype($x);
echo gettype($y),'<hr>';

################################

/* Preinkrementacja ++$x
   Predekrementacja --$x
   Postinkrementacja $x++
   Postdekrementacja $x--
  */

  $x=2;
  echo $x;//2
  $x=$x--;
  $x=$x+3;
  echo $x;//5
  $x=$x++;
  echo $x;//5
  $x=++$x;
  echo $x;//6
  $y=++$x;
  $y=++$x*2+3;
  echo $x;//8
  echo $y;//19

  $x=2;
  echo $x++; //x=2
  echo ++$x; //x=4
  echo $x;   //x=4
  $y=$x++;
  echo $y;   //y=4
  $y=++$x;
  echo $y;  //y=6
  echo ++$y,'<hr>';//y=7

//operatory rzutowania
//bool,int,float,string,array,object,unset
$text='123abc';
$text1=0;
$text2=20;

echo 'Typ danych $text:',gettype($text),'<br>';
$x=(int)$text;
echo $x;
echo 'Typ danych $x:',gettype($x),'<br>';
echo 'Typ danych
$text:',gettype($text),'<br>';

$x=(bool)$text1;
echo $x; //false
?>
