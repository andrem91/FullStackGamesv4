<?php
    include_once ("php/actions/connect.php");

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

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/9626911983.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Inicio do cabecalho -->
        <?php
            include('./html/cabecalho.html');
            include('./html/menu.html')
        ?>
        <!-- /Fim do cabecalho -->
        <main class="container">
            <h2 class="border-bottom py-4">Contato</h2>
            <div class="mb-4">
                <div>
                    <a class="text-white" href="mailto:contato@fullstackgames.com.br"><i class="far fa-envelope fa pr-2"></i>contato@fullstackgames.com.br</a>
                </div>

                <div>
                    <a class="text-white" href="tel:11999999999"><i class="fab fa-whatsapp fa pr-2"></i>(11) 99999-9999</a>
                </div>
            </div>
            <h3>Deixe sua mensagem</h3>
            <form>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="number" class="form-control" id="telefone" name="telefone">
                </div>
                <div class="form-group">
                    <label for="mensagem">Example textarea</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Enviar</button>
            </form>

            <div id="comentarios">
                <h3 class="mt-5">Mensagens:</h3>

                <?php
                    $sql = "select * from comentarios";
                    $result = $conectar->query($sql);

                    if($result->num_rows > 0 ) {
                        while($rows = $result->fetch_assoc()) {
                            echo "<div class='mt-4 border-bottom'><p>Data: ", $rows['data'], "</p>";
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>