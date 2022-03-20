<?php

    function calcular($colecao, $operador, $valor) {
        

        switch($operador)
        {
            case '+':
                foreach( $colecao as &$val ){ 
                    $val += $valor; 
                }
            break;

            case '-':
                foreach( $colecao as &$val ){ 
                    $val -= $valor; 
                }
            break;

            case '*':
                foreach( $colecao as &$val ){ 
                    $val *= $valor; 
                }
            break;

            case '/':
                foreach( $colecao as &$val ){ 
                    $val /= $valor; 
                }
            break;
        }   
        return $colecao;
    }

    $colecao = array(42, 17, 3.14, 6.626);
    print_r(calcular($colecao, '/', 5)); 

?>
