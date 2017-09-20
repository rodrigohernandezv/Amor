<?php

class OperacionAmor {
    
    function operar(){

    echo $_REQUEST["novio"]."Y".$_REQUEST["novia"]."Se Aman";
    }
}
$miobjeto=new Operancionamor();
echo $miobjeto->operar();
?>

