<?php
/**
 * Created by PhpStorm.
 * User: Ulle
 * Date: 14-Dec-17
 * Time: 13:35
 */
header('Refresh: 1');
for ($rida = 1; $rida <= 5; $rida++){
    $varv = '#';
    for ($kord = 1; $kord <= 6; $kord++){
        $juhuarv = rand(0, 15);
        $symbol = dechex($juhuarv);
        $varv = $varv.$symbol;
    }
    echo '<font color = "'.$varv.'">'.
        'Värviline tekst'.
        '</font>'.
        '<br />';
}

//
$a = 5; $b = 2;
$c = $a++;
$d = $b--;
echo 'a = '.$a.'<br />';
echo 'b = '.$b.'<br />';
echo 'c = '.$c.'<br />';
echo 'd = '.$d.'<br />';
//
$a = 5; $b = 2;
$c = ++$a;
$d = --$b;
echo 'a = '.$a.'<br />';
echo 'b = '.$b.'<br />';
echo 'c = '.$c.'<br />';
echo 'd = '.$d.'<br />';
//
$kord = 1; # 11 oleks suurem kui 5, ei väljasta
while($kord <= 5) {
    echo '<i>'.$kord++.'</i><br />';
    if($kord == 2){
        break;
    }
}
//
$kord = 1;
do{
   echo '<b>'.$kord++.'</b><br />';
    if ($kord == 3){
        continue;
    }
} while($kord <= 5);

?>