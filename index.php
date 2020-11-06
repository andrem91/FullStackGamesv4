
        <?php
            include('./html/cabecalho.html');
            include('./html/menu.html');
        ?>
        <div class="container">
            <h2 class="border-bottom py-4">Seja bem vindo(a)!</h2>

            <!-- Slideshow -->
            <div id="carouselExampleInterval" class="carousel slide mb-3" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                        <img src="./img/tela-inicial01-slide.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Sejam bem vidos ao FullStackGames!!</h5>
                            <p>Aqui na FullStack Games, <strong>programadores tem desconto</strong> nos produtos do site!</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="./img/tela-inicial02-slide.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Jogos classicos</h5>
                            <p>É nostalgia sem limites! Temos uma grande variedades de jogos classicos.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./img/tela-inicial03-slide.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Lançamento do ano!!</h5>
                            <p>O console mais esperado do ano você encontra aqui na FullStackGames!</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

            <!-- Inicio do rodape -->
            <?php
                include('./html/footer.html')
            ?>
            <!-- /Fim do rodape -->

