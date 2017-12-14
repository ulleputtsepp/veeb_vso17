<?php
/**
 * Created by PhpStorm.
 * User: Ulle
 * Date: 14-Dec-17
 * Time: 12:29 */
for ($number=1; $number<=10; $number++){
    echo $number.'<br />';
    if($number % 2 != 0) {
        $varv = 'blue';
    }
        else{
            $varv = 'red';
        }
        echo '<font color =" '.$varv.'">'.$number.'</font><br />';
    }
?>