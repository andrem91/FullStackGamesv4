<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fsgames";

    //Criando a conexão
    $conectar = mysqli_connect($servername, $username, $password, $database);
    mysqli_set_charset($conectar, 'utf8');

    //Verificando a conexão
    if(!$conectar) {
        die("A conexão ao DB falou: " .mysqli_connect_error());
    }
?>