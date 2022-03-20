<?php

    function multiplicaPorEscalar($colecao, $escalar) {
        
        foreach( $colecao as &$val ){ 
            $val *= $escalar; 
        }
        return $colecao;

    }

    $colecao = array(42, 17, 3.14, 6.626);
    $escalar = 5;
    print_r(multiplicaPorEscalar($colecao, $escalar)); 

?>
