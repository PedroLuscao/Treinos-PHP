<?php
    $num = $_GET['num'];

    function f($num){
        $array = array();

        for ($i=0; $i<$num; $i++){
            $array[$i]=rand();
        }

        return $array;
    }

    print_r(f($num));
?>