<?php
/**
 * Created by PhpStorm.
 * User: Ulle
 * Date: 19-Jan-18
 * Time: 13:05
 */
//nõuame andmebaasitöötlusfunktsioonid kasutusse
require_once 'db_fnk.php';
//tekitame yhenduse andmebaasiga funktsiooni nime abil
$dbYhendus = yhendus();
// koostame sql lause ja saadame andmebaasi
$sql = 'SHOW TABLES'; //päring mis peaks näitama tabeli sisu
$tulemus = annaAndmed($dbYhendus, $sql); //kui siin kirjutan funktsiooni nime 'saadaParing', siis lühivariant, kui annaAndmed, siis näen kõiki tabeleid
// uurime tulemuse sisu test kujul
echo '<pre>';
print_r($tulemus);
echo '<pre>';