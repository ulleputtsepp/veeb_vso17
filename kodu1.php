<?php
/**
 * Created by PhpStorm.
 * User: Ulle
 * Date: 23-Apr-18
 * Time: 01:14
 *
 * 1. Koostada funktsioon nimega arvuSumma, mis võtab parameetrina suvalise numbri ja arvutab numbri arvude summa - juhul, kui on argumendina funktsioonile antud number 123, siis programm peab leidma 1+2+3 summa, ehk 6. Lahendamiseks ei tohi kasutada sõnetöötluse võimalused.

2. Koostada funktsioon nimega otsiNumber, mis võtab parameetrina suvalise arvu ja kindlaks määratud arvu ja arvutab mitu korda määratud arv esineb suvalises numbris, näiteks arv 5 esineb numbris 442158755745 neli korda. Lahendamiseks ei tohi kasutada sõnetöötluse võimalused

 */
function arvuSumma($number){
    $summa = 0;
    while($number){
        $u = $number % 10; //loopis tekivad 10-ga jagamise jäägid
        $summa = $summa + $u;
        $number = $number / 10;
    }
    return $summa;
}
$number = rand(1,999);
echo $number.' summa on '.arvuSumma($number);
echo '<br />';

function otsiNumber($suvalineArv, $antudArv){
    echo $antudArv.' esineb arvus '.$suvalineArv;
    $kord = 0;
    while ($suvalineArv){
        $arv = $suvalineArv % 10;
        if ($arv == $antudArv){
            $kord++;
        }
        $suvalineArv = $suvalineArv / 10;
    }
    echo ' vaid '.$kord.' korda';
}
$a = rand(100000000,999999999);
$b = rand(1,9);
otsiNumber($a, $b);

