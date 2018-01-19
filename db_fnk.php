<?php
/**
 * Created by PhpStorm.
 * User: Ulle
 * Date: 19-Jan-18
 * Time: 12:31
 */
require_once 'db_conf.php'; //nõuame kongig-faili sisu kasutamist
//koostan funkts-ni ühendamiseks andmeb
function yhendus(){
    $yhendus = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); //muutuja pole seotud fn nimega
    if(!$yhendus){
        echo 'Puudub yhendus andmebaasi serveriga<br />';
        echo mysqli_connect_error().'<br />';
        echo mysqli_connect_errno().'<br />';
        return false; //olukord kus yhendust pole
    } else {
        echo 'Ühendus andmebasai serveriga on olemas<br />';
        return $yhendus; //nüüd yhendab
    }
}

//päringu satamine, päring on $sql, tabelit näha pole
function saadaParing($yhendus, $sql){
    $tulemus = mysqli_query($yhendus, $sql);
    if(!$tulemus){
        echo 'Probleem päringuga '.$sql.'<br />';
        echo mysqli_error($yhendus).'<br />';
        echo mysqli_errno($yhendus).'<br />'; //kui päring ei lainud läbi
        return false;
    } else {
        echo 'Päring läks läbi<br />';
        return $tulemus;
    }
}

// saada päring ja too andmetabel nähtavaks, näen andmeid
function annaAndmed($yhendus, $sql){
    $tulemus = saadaParing($yhendus, $sql); //mitte-objekt-orienteritud, oluline järjekord!
    $andmed = array(); // massiiv, mida sisuga täidan
    if($tulemus != false){
        while($rida = mysqli_fetch_assoc($tulemus)){ // andmeid loen ridade kaupa, ei tea, mite rida, kasuta while funktsiooni
            $andmed[] =$rida;
        }
    }
    if(count($andmed) == 0){
        return false;
    } else {
        return $andmed;
    }
    // tagastan andmetega täidetud massiivi
}