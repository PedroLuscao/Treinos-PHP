<?php

    function somaMap($map){
        $soma = array_sum($map);
        return $soma;
    }


    $produto = ["pera" => 4.50 , "uva" => 10.00 , "maça" => 5.00 ];

    echo 'Soma: '.somaMap($produto);

?>