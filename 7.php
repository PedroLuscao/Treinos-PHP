<?php
    $num = $_GET['num'];

    function f($num){
        $array = array();

        for ($i=1; $i<=$num; $i++){
            $array[$i]=rand();
        }

        echo array_sum($array);
    }

    f($num);
?>