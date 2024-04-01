<?php
    
    $conexao = mysqli_connect('localhost','root', '', 'bigbangtheoryinc');
    if (!$conexao) {
        die("Conexao deu errado: " . mysqli_connect_error());
    }

?>