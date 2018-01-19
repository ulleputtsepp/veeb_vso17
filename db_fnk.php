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
    $yhendus = mysqli_connect(host:DB_HOST, user:DB_USER, password:DB_PASS, datbase:DB_NAME); //pole seotud fn nimega
    if(!$yhendus){
        echo 'Puudub yhendus andmebaasi serveriga<br />';
        echo mysqli_connect_error().'<br />';
        echo mysqli-connect_errorno().'<br />';
        return false; //olukord kus yhendust pole
    } else {
        echo 'Ühendus andmebasai serveriga on olemas<br />';
        return $yhendus; //nüüd yhendab
    }
}