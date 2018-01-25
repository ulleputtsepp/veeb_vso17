<?php
/**
 * Created by PhpStorm.
 * User: Ulle
 * Date: 25-Jan-18
 * Time: 11:10
 */
require_once  'tekst.php';
class vtekst extends tekst
{
    // see klass kasutab seda mis juba tehtud; lisame värvi
    var $varv = '';

    /**
     * vtekst constructor.
     * @param string $varv
     */
    public function __construct($sone, $varv)
    {
        parent::__construct($sone);
        $this->maaraVarv($varv);
    }

    function maaraVarv($varv){
        $this->varv = $varv;
    }
}