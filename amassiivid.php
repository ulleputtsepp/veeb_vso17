<?php
/**
 * Created by PhpStorm.
 * User: Ulle
 * Date: 12-Jan-18
 * Time: 08:45
 */
$opilane=array(
    'eesnimi'=> 'Mart',
    'perenimi' => 'Lepp',
    'vanus' => 15,
    'klass' => 9
);

echo '<pre>';
print_r($opilane);
echo '</pre>';

foreach ($opilane as $vaartus) {
    echo $vaartus.'<br />';
}

foreach ($opilane as $element => $vaartus){
    echo $element.' - '.$vaartus. '<br />';
}
