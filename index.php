<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Full Stack Games</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/home.css">

    </head>
    <body>
        <!-- Inicio do cabecalho -->
        <?php
            include('./html/header.html');
        ?>
        <!-- /Fim do cabecalho -->
        <main id="home">
            <h2>Seja bem vindo(a)!</h2>
            <section>
                <p>Aqui na FullStack Games, <strong>programadores tem desconto</strong> nos produtos do site!</p>
                <!-- Slideshow -->
                <div class="slideContainer">
                    <div class="imgSlides fade">
                        <div class="numero">1 / 3</div>
                        <img src="./img/tela-inicial01-slide.jpg">
                        <div class="texto">Os melhores jogos e lançamentos de todas as plataformas de games estão aqui.</div>
                    </div>
                    <div class="imgSlides">
                        <div class="numero">2 / 3</div>
                        <img src="./img/tela-inicial02-slide.jpg">
                        <div class="texto">Jogos classicos e nostalgicos é diversão garantida para toda a família!</div>
                    </div>
                    <div class="imgSlides">
                        <div class="numero">3 / 3</div>
                        <img src="./img/tela-inicial03-slide.jpg">
                        <div class="texto">Não perca o lançamento do mais novo console da Sony. O Incrivel playstation 5!!</div>
                    </div>

                    <a class="esquerda" onclick="rolarSlides(-1)">&#10094;</a>
                    <a class="direita" onclick="rolarSlides(1)">&#10095;</a>
                </div>
                <br>
                <div class="circulos">
                    <span class="circulo" onclick="escolherSlide(1)"></span>
                    <span class="circulo" onclick="escolherSlide(2)"></span>
                    <span class="circulo" onclick="escolherSlide(3)"></span>
                </div>
            </section>
            
        </main>
        <!-- Inicio do rodape -->
        <?php
            include('./html/footer.html')
        ?>
        <!-- /Fim do rodape -->
        <script src="./js/slideShow.js"></script>

    </body>
</html>

