<?php

    function semReferencia($a){
        $a--;
        echo $a . "<br>";
    }

    function comReferencia(&$a){
        $a--;
        echo $a . "<br>";
    }


    echo 'Sem Referência <br>';
    $num = 10;
    semReferencia($num);

    echo $num . "<br><br>" . 'Com Referência <br>';

    comReferencia($num);

    echo $num . "<br>"

?>