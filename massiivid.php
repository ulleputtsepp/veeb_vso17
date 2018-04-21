<?php
/**
 * Created by PhpStorm.
 * User: Ulle
 * Date: 21-Dec-17
 * Time: 14:20
 */
$arvud = array(); // tühi massiiv
// lisame vrt-sed, selleks pole tarvis funktsiooni
$arvud[]=5;
$arvud[]=1;
$arvud[]=4;
$arvud[]=2;
$arvud[]=3;


// või nii, väärtustega
$arvud1=array(1,2,3,4,5);

echo $arvud1; //väljastades ei näe arve; väljastamiseks kasutaja jaoks nest print_r btw '<pre>','</pre>', :
echo '<pre>';
print_r($arvud); //testväljastus
echo '</pre>';
// korralik väljastus
for($i=0; $i<count($arvud); $i++){
    echo '<b>'.$arvud[$i].'</b><br />';
}
foreach ($arvud1 as $arv){
    echo '<i>'.$arv.'</i><br />';
}
echo '<hr />';
// Ülesanded
/*
 * 1.
 * Koosta funktsioon nimega looMassiiv,
 * mis võtab parameetriks massiivi elementide
 * arvu ja loob juhuarvudest (täisarvud)
 * vahemikust 100-999 koosneva massiivi.
 * Loodud massiiv tuleb tagastada
 * põhiprogrammile ja kontrollida sisu
 * testväljastuse abil - näiteks print_r
 * */
function looMassiiv($elementideArv)
{
    $massiiv = array(); //kõigepealt tühi massiiv
    for ($kord = 1; $kord <= $elementideArv; $kord++) {
        $juhuarv = rand(100, 999);
        $massiiv[] = $juhuarv;
    }
    return $massiiv;
}
    $testMassiiv=looMassiiv(5);
    echo '<pre>';
    print_r($testMassiiv);
    echo'</pre>';
    echo '<hr />';
//iga refreshiga arvud muutuvad juhuslikult
/*
 * 2.
 * Loo funktsioon nimega valjastaMassiiv,
 * mis võtab parameetrina massiivi ja
 * väljastab tema elemendid
 * üheveerulise tabeli kujul
 * Väljundi loomisel kasutada foreach
 * tsükkel
 * */
function valjastaMassiiv($massiiv){
    echo '<table border="1">';
    foreach($massiiv as $element){
        echo '<tr>';
            echo '<td>';
            echo $element;
            echo '</td>';//nihutus enda jaoks - pesa
        echo '</tr>';
    }
    echo '</table>';
}
valjastaMassiiv($testMassiiv);
echo '<hr>';

 /*
 * 3.
 * Loo funktsioon nimega vahetaMinMax, mis võtab
 * parameetrina täisarvude massiivi (testimises
 * võib kasutada looMassiiv funktsiooniga
 * genereeritud massiiv)
 * ja leiab kõige väiksema ja kõige suurema
 * elemendi antud massiivis ning vahetab nende asukohad.
 *
 * Kontrolli kas kohad on vahetatud kasutades
 * valjastaMassiiv funktsiooni
*/

 function vahetaMinMax(&$massiiv){ //& ambersand muudab lingiks
     $min=min($massiiv);
     $max=max($massiiv);
     echo 'Minimum='.$min.'<br />';
     echo 'Maximum='.$max.'<br />';
     for($i=0;$i<count($massiiv); $i++){
         if($massiiv[$i]==$min) { //võrdlus ==
             $massiiv[$i] = $max; //omistamine =
         } else if ($massiiv[$i]==$max){
             $massiiv[$i]=$min;
         }
         echo $massiiv[$i].'<br />';
     }
 }
vahetaMinMax($testMassiiv);
valjastaMassiiv($testMassiiv);
 /*
 * 4.
 * Loo funktsioon nimega elementideKorrutis, mis
 * võtab parameetrina täisarvude massiivi ja leiab
 * korrutis nendest arvudest, mis on suurem kui 0
 * ja mille indeksid on paarisarvud.
 * Kontrollimiseks näiteks kasutada järgmine massiiv:
 * 1, 0, 6, 0, 0, 3, 5
 * Tulemus väljastatakse antud funktsiooni abil kujul:
 * Tulemus: 1 * 6 * 5 = 30
*/
/**
 * @param $joru
 */
echo '<br />';
function elementideKorrutis($joru){
    $suurem = array();
    foreach ($joru as $k => $v){
        if ($k % 2 == 0 and $v > 0) {
            $suurem[] = $v;
            //print_r($suurem); //uus massiiv [0]=>1,[1]=>6,[2]=>5
            $korrutis = array_product($suurem);
           }
        }
        echo 'Korrutis on: '.$suurem[0]." * ".$suurem[1]." * ".$suurem[2]." = ".$korrutis.'<br />';
    }
    $testMass=elementideKorrutis([1,0,6,0,0,3,5]);
    echo '<hr />';
/*
 * 5.
 * Töötluses kasutada massiiv
 * $massiiv = array(1, 1, 1, 2, 2, 2, 2, 3).
 * Loo funktsioon mitteDubleeri, mis võtab
 * parameetrina massiivi ja ei väljasta dubleeritud
 * elemendid. Ehk näidemassiivi puhul tuleb väljastada
 * ainult 1, 2, 3 - s.t. ilma dubleerimist.
 * NB! Lahenduses tuleb kasutada AINULT ÜKS foreach
 * tsükli abil, samuti EI SAA kasutada
 * grupeerimisfunktisoone ega muuta antud massiivi
 * */

function mitteDubleeri($massiiv){
    $yhekordne = '';
       foreach ($massiiv as $value){
          if ($yhekordne != $value){
            $yhekordne = $value;
            echo $value;
        }
    }
}
mitteDubleeri(array(1, 1, 1, 2, 2, 2, 2, 3));
echo '<hr />';
?>