<?php
/**
 * Created by PhpStorm.
 * User: Ulle
 * Date: 25-Jan-18
 * Time: 10:47
 */
require _once 'tekst.php';

// loome teksti objekt
$minuTekst = new tekst(); //teksti töötluse element, see tuli klassifailist
// määrame konkretse sisu
$minuTekst->maaraTekst('Tere maailm!');
// vaatame objekti sisse
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
// prindime välja
$minuTekst->prindiTekst();