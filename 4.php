<?php
    $num = $_GET['num'];

    function f($num){
        $array = array();

        for ($i=1; $i<=$num; $i++){
            $array[$i]=$i;
        }

        print_r($array);
    }

    f($num);
?>