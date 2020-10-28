<?php
    require('php/connect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produtos - Full Stack Games</title>

        <!-- CSS -->
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/produto.css">
        

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

        <main id="pagina-produto">
            <h2>Produtos</h2>
            <div class="flexbox">
                <aside id="menu-lateral">
                    <h3>Categorias</h3>
                    <nav>
                        <ul>
                            <li onclick="exibirTodos()"><p><i class="far fa-caret-square-right"></i>Todos os produtos</p></li>
                            <li onclick="exibirCategoria('playstation5')"><p><i class="far fa-caret-square-right"></i>PlayStation 5 (3)</p></li>
                            <li onclick="exibirCategoria('nintendoSwitch')"><p><i class="far fa-caret-square-right"></i>Nintendo Switch (2)</p></li>
                            <li onclick="exibirCategoria('xboxOne')"><p><i class="far fa-caret-square-right"></i>Xbox One (3)</p></li>
                            <li onclick="exibirCategoria('pcGamer')"><p><i class="far fa-caret-square-right"></i>PC Gamer (2)</p></li>
                            <li onclick="exibirCategoria('acessorios')"><p><i class="far fa-caret-square-right"></i>Acessórios (2)</p></li>
                        </ul>
                    </nav>
                </aside>
                <section id="produtos">
                    <?php
                        $produtos = "select * from produtos";
                        $result = $conectar->query($produtos);
                    
                        if($result->num_rows > 0) {
                            while($rows = $result->fetch_assoc()) {
                                
                    ?>
                        <div class="boxProduto" id="<?php echo $rows["categoria"]; ?>">
                            <div class="imgProduto">
                                <img src="<?php echo $rows["imagem"]; ?>" onclick=destaque(this) onmouseover="aumentarImagem(this)" onmouseout="diminuirImagem(this)">
                            </div>
                            <div class="descricaoProduto">
                                <p class="nome-produto"><?php echo $rows["produto"]; ?></p>
                                <p class="valor-inteiro"><strike>R$ <?php echo $rows["preco"]; ?></strike></p>
                                <p class="promocao">R$ <?php echo $rows["preco_venda"]; ?></p>
                            </div>
                            <div class="botaoProduto">
                                <button>Detalhes</button>
                            </div>
                        </div>

                    <?php
                            }
                        } else {
                            echo "Nenhum produto cadastrado";
                        }
                    ?>

                </section>
            </div>

        </main>
        <!-- /Fim corpo -->
        <!-- Inicio do rodape -->
        <?php
            include('./html/footer.html')
        ?>
        <!-- /Fim do rodape -->

        <script src="./js/script.js"></script>
    </body>
</html>