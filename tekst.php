<?php
/**
 * Created by PhpStorm.
 * User: Ulle
 * Date: 25-Jan-18
 * Time: 10:32
 */

class tekst
{ // klassi algus
    // klassi omadused (väljad, fields) - muutujad, mida defineerime
    // klassi muutuja var mingi algväärtusega, kirjeldus peaks olema võimalikult tühi, et lubaks varieeruvust
    var $sone = '';

    /**
     * tekst constructor.
     * @param string $sone
     */
    public function __construct($sone)
    {
        $this->maaraTekst($sone);
        // $this->sone = $sone;
    }
    // teksti kirjeldavad sõnad
    // klassi tegevused meetoditena kirja, kuidas sooritada üksiktegevused, väga detailselt
    // millise sisuga teskti tahan kirjutada
    // käima: maaraTekst('Tere maailm!');
    function maaraTekst($sone){  // siin $sone on parameeter, mitte muutuja
        $this->sone = $sone;
    }
    // teksti väljastamine
    function prindiTekst(){
        echo $this->sone.'<br />'; // esialgu puhas leht; teen uue tavalise PHP faili tesktitest.php
    }

} // klassi lõpp