<?php
    require("php/connect.php");

    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['mensagem'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];

        $sql = "insert into comentarios (nome, email, telefone, mensagem) values
        ('$nome', '$email', '$telefone', '$mensagem')";
        $result = $conectar->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contato - Full Stack Games</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/contato.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/9626911983.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Inicio do cabecalho -->
        <?php
            include('./html/header.html');
        ?>
        <!-- /Fim do cabecalho -->
        <main id="contato">
            <h2>Contato</h2>
            <div class="flexbox">
                <div id="tel-email">
                    <div class="item-contato">
                        
                        <a href="mailto:contato@fullstackgames.com.br"><i class="far fa-envelope fa-2x"></i>contato@fullstackgames.com.br</a>
                    </div>
                    <div class="item-contato">
                        
                        <a href="tel:11999999999"><i class="fab fa-whatsapp fa-2x"></i>(11) 99999-9999</a>
                    </div>
                </div>
    
                <form method="post" action="" id="formulario-contato">
                    <fieldset>
                        <legend>Deixe sua Mensagem</legend>
                        <label for="nome">Nome:</label>
                        <br>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
                        <br><br>
                        <label for="email">E-mail:</label>
                        <br>
                        <input type="email" id="email" name="email" placeholder="ex: seu@email.com.br">
                        <br><br>
                        <label for="telefone">Telefone:</label>
                        <br>
                        <input type="number" id="telefone" name="telefone" placeholder="ex: 11999999999">
                        <br><br>
                        <label for="mensagem">Mensagem:</label><br>
                        <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
                        <br><br>
                        <input type="submit" class="botao" name="submit" value="Enviar">
                    </fieldset>
                </form>
            </div>
            <div id="comentarios">
                <?php
                    $sql = "select * from comentarios";
                    $result = $conectar->query($sql);

                    if($result->num_rows > 0 ) {
                        while($rows = $result->fetch_assoc()) {
                            echo "<div class='comentario'><p>Data: ", $rows['data'], "</p>";
                            echo "<p>Nome: ", $rows['nome'], "</p>";
                            echo "<p>Mensagem: ", $rows['mensagem'], "</p></div>";
                        } 
                    } else {
                            echo "Nenhum comentário ainda!";
                    }
                ?>
            </div>
        </main>
        <!-- Inicio do rodape -->
        <?php
            include('./html/footer.html')
        ?>
        <!-- /Fim do rodape -->
    </body>
</html>