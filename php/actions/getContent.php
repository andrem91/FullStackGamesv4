<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fsgames";
    $tabela = $_GET['table'];

    //Criando a conexão
    $conectar = mysqli_connect($servername, $username, $password, $database);
    mysqli_set_charset($conectar, 'utf8');

    //Verificando a conexão
    if(!$conectar) {
        die("A conexão ao DB falou: " .mysqli_connect_error());
    }

    $produtos = "select * from $tabela";
    $result = $conectar->query($produtos);
                            
    print_r(json_encode($result->fetch_all(MYSQLI_ASSOC)));

    mysqli_close($conectar);

?>