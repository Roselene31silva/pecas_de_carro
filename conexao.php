<?php
        /* inicio da conexão com o BD */
        $servidor = 'localhost';
        $bd = 'pecas_carros';
        $usuario = 'root';
        $senha = '';
 
        $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
        if(!$conexao){
            die("deu ruim" . mysqli_connect_error());
        }
        /* fim da conexão */
        ?>
