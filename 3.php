<?php

    function semReferencia($a){
        $a--;
        echo $a . "<br>";
    }

    function comReferencia(&$a){
        $a--;
        echo $a . "<br>";
    }


    echo 'Sem ReferĂȘncia <br>';
    $num = 10;
    semReferencia($num);

    echo $num . "<br><br>" . 'Com ReferĂȘncia <br>';

    comReferencia($num);

    echo $num . "<br>"

?>