<?php

    function listar($path) {
        if(is_dir($path)) {
            $diretorio = dir($path);

            $i = 0;
            while($arquivo = $diretorio -> read()){
                $array[$i] = $arquivo;
                $i++;
            }

            $diretorio -> close();
        }
        else{
            echo 'O diretório não existe';
        }
        return $array;
    }


    print_r(listar($_GET['dir']));

?>