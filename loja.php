<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nossas lojas - Full Stack Games</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/lojas.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Inicio do cabecalho -->
        <?php
            include('./html/header.html');
        ?>
        <!-- /Fim do cabecalho -->
        <main id="lojas">
            <h2>Nossas Lojas</h2>
            <table>
                <tr>
                    <td>
                        <h3>Rio de janeiro</h3>
                        <p>Avenida Presidente Vargas, 5000</p>
                        <p>10 &ordm; andar</p>
                        <p>Centro</p>
                        <p>(21) 3333-3333</p>
                    </td>
                    <td>
                        <h3>São Paulo</h3>
                        <p>Avenida Paulista, 985</p>
                        <p>3 &ordm; andar</p>
                        <p>Jardins</p>
                        <p>(11) 4444-4444</p>
                    </td>
                    <td>
                        <h3>Santa Catarina</h3>
                        <p>Rua Major &Aacute;vila, 370</p>
                        <p>Vila Mariana</p>
                        <p>(47) 5555-5555</p>
                    </td>
                </tr>
            </table>
        </main>
        <!-- Inicio do rodape -->
        <?php
            include('./html/footer.html')
        ?>
        <!-- /Fim do rodape -->
    </body>
</html>