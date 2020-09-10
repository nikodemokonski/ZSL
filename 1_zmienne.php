<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>zmienne</title>
  </head>
  <body>
    <?php
    $name='Janusz';
    $surname='Nowak';
    echo 'Imię: $name<br>';
    echo "Imię: $name<br>";
    //konkatencja .
    echo "Nazwisko: $surname".'<hr>';

    //typy danych
    //boolean
    $prawda=true;
    $fałsz=false;

    echo $prawda;//1
    echo $fałsz;//nic nie wyświetli

    //integer
    $calkowita = 20;
    $binarna = 0b1011; //11
    $oct = 010; //8
    $hex = 0xA; //10

    echo "<hr>$hex<hr>";

    //skladania heredoc
    $text = <<<ETYKIETA
    Imię: $name<br>
    ETYKIETA;

    echo $text;
    $surname="Kowalski";
    echo <<<E
    Nazwisko: $surname</hr>
    E;

    //składnia nowdoc
    echo <<< 'E'
    Nazwisko: $surname</hr>
    E;

    $city='Poznań';
    echo "Nazwa zmiennej: \$city, wartość zmiennej: $city";
    ?>
  </body>
</html>
