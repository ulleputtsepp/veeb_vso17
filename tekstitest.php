<?php
/**
 * Created by PhpStorm.
 * User: Ulle
 * Date: 25-Jan-18
 * Time: 10:47
 */
require _once 'tekst.php';

// loome teksti objekt
// $minuTekst = new tekst(); //teksti töötluse element, see tuli klassifailist
// määrame konkretse sisu
$minuTekst->new tekst('Teme maailm!');// välja, sest on juba konstruktoris: maaraTekst('Tere maailm!');
// vaatame objekti sisse
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
// prindime välja
$minuTekst->prindiTekst();

// loome uue teksti
$mustTekst = new tekst('Must Tekst');
echo '<pre>';
print_r($mustTekst);
echo '</pre>';
$mustTekst->prindiTekst();
