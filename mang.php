<?php
/**
 * Created by PhpStorm.
 * User: Ulle
 * Date: 12-Jan-18
 * Time: 08:55
 */
function vorm(){
    $serveriArv = $_POST['serveriArv'];
    $kordadeArv = $_POST['kordadeArv'];
    $serveriArv=isset($serveriArv) ? $_POST['serveriArv']: rand(1,20); //määratud väärtus ?kui 'true' siis muutuja olemas
    $kordadeArv = isset($kordadeArv) ? ++$kordadeArv: 0;
    echo 'Sisesta arv vahemikus 1 - 20<br />';
    //echo $serveriArv.'<br />';
    echo '
   <form action="'.$_SERVER['PHP_SELF'].'" method="post">
   <!--<form action="mang.php" method="post"> töötab ka-->
   <input type="hidden" name="serveriArv" value="'.$serveriArv.'">
   <input type="hidden" name="kordadeArv" value="'.$kordadeArv.'">
   <input type="text" name="kasutajaArv"><br />
   <input type="submit" value="Kontrolli">
   </form>
    ';
}

function vormiAndmed(){
    echo '<pre>';
    print_r($_POST); /** alt meetod $_POST ja $_GET*/
    echo '<pre>';
    $korras = false;
    if(empty($_POST)){
        echo 'Vorm ei saatnud andmeid<br />';
    } else {
        echo 'Andmed on saadetud<br />';
        if(empty($_POST['kasutajaArv'])){
            echo 'Andmed peavad olema sisestatud<br />';
        } else {
            echo 'Andmed on sisestatud<br />';
            $korras=true;
        }
    }
    return $korras;
}

function arvuKontroll($kasutajaArv, $serveriArv) {
    if($kasutajaArv > $serveriArv){
        echo 'Pakutud väärtus on suurem<br />';
    }
    if($kasutajaArv <  $serveriArv){
        echo 'Pakutud väärtus on väiksem<br />';
    }
    if(abs($serveriArv-$kasutajaArv)<=5){
        if($kasutajaArv == $serveriArv){
            echo 'Õnnitleme! Arvasid ära!<br />'.'Tegid '.++$_POST['kordadeArv'].' katset';
            exit; /**paneb tööprotsessi kinni*/
        }
        echo 'Aga oled juba väga lähedal<br />';
    }
}
vorm();
//vormiAndmed();
if(vormiAndmed()){
    arvuKontroll($_POST['kasutajaArv'], $_POST['serveriArv']);
} else {
    echo 'Andmed peavad olema sisestatud<br />';
}