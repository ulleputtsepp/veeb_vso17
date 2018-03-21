<?php
/**
 * Created by PhpStorm.
 * User: Ulle
 * Date: 14-Dec-17
 * Time: 12:29 */
// numbrid väljastatud värviliselt
for ($number=1; $number <=10; $number++){
    //echo $number.'<br />';
    if($number % 2 == 0) {
        $varv = 'blue';
    }
        else{
            $varv = 'red';
        }
        echo '<font color ="'.$varv.'">'.$number.'</font><br />';
    }
//operaatorid ++ ja --
    $a=5; $b=2;
    $c=$a++;
    $d=$b--;
    echo 'a= '.$a.'<br />'; //a=6
    echo 'b= '.$b.'<br />'; //b=1
    echo 'c= '.$c.'<br />'; //c=5
    echo 'd= '.$d.'<br />'; //d=2

    $a=5; $b=2;
    $c = ++$a;
    $d = --$b;
    echo 'a= '.$a.'<br />'; //a=6
    echo 'b= '.$b.'<br />'; //b=1
    echo 'c= '.$c.'<br />'; //c=6
    echo 'd= '.$d.'<br />'; //d=1

// while ja do-while tsüklid koos break ja continuega
$kord=1;
while($kord <= 5){
    if($kord == 3){
        break;
    }
    echo '<i>'.$kord++.'</i><br />'; //12 italic
}
//
$kord=1;
do {
    if($kord == 3){
        continue;
    }
    echo '<b>'.$kord.'</b><br />';
} while(++$kord <= 5); //1245 bold


?>