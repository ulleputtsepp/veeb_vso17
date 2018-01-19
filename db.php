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
$tulemus = saadaParing($dbYhendus, $sql);