<?php
    include_once ('php/actions/connect.php');
?>


<?php
    include('./html/cabecalho.html');
    include('./html/menu.html');
?>
        <div class="container">
            <h2 class="border-bottom py-4">Produtos</h2>
            <div class="row">

                <div class="col-lg-3 mb-3">

                    <h3 class="my-4">Categorias</h3>
                    <ul class="list-group">
                    <li onclick="exibirTodos()" class="pointer list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        Todos os produtos
                        <span class="badge badge-primary badge-pill">12</span>
                    </li>
                    <li onclick="exibirCategoria('playstation5')" class="pointer list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        Playstation 5
                        <span class="badge badge-primary badge-pill">3</span>
                    </li>
                    <li onclick="exibirCategoria('nintendoSwitch')" class="pointer list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        Nintendo Switch
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li onclick="exibirCategoria('xboxOne')" class="pointer list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        Xbox One
                        <span class="badge badge-primary badge-pill">3</span>
                    </li>
                    <li onclick="exibirCategoria('pcGamer')" class="pointer list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        PC Gamer
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li onclick="exibirCategoria('acessorios')" class="pointer list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        Acessórios
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    </ul>
                </div>

                <div class="col-lg-9">

                    <div class="row">
                        <?php
                            $produtos = "select * from produtos";
                            $result = $conectar->query($produtos);
                        
                            if($result->num_rows > 0) {
                                while($rows = $result->fetch_assoc()) {  
                        ?>
                        <div class="boxProduto col-lg-4 col-md-6 mb-4 text-dark" id="<?php echo $rows['categoria'];?>">
                            <div class="card h-100">
                                <span class="text-center mt-2 pointer"><img class="img card-img-top" src="<?php echo $rows['imagem']; ?>" alt="" style="width: 200px; margin-bottom: 40px;" onmouseover="aumentarImagem(this)" onmouseout="diminuirImagem(this)"></span>
                                <div class="card-body">
                                    <p class="card-title"><?php echo $rows['produto']; ?></p>
                                    <div class="card-text">
                                        <h6 class="text-danger"><del>R$ <?php echo $rows['preco']; ?></del></h6>
                                        <h5>R$ <?php echo $rows['preco_venda']; ?></h5>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary btn-block">Detalhes</button>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        } else {
                            echo "Nenhum produto cadastrado";
                        }
                        ?>
                    </div>
                </div>
                    <!-- /.row -->

            </div>
        </div>
        <script src="./js/script.js"></script>

        <!-- Inicio do rodape -->
        <?php
            include('./html/footer.html')
        ?>
        <!-- /Fim do rodape -->
