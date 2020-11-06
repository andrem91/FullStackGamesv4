<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nossas lojas - Full Stack Games</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <!-- Inicio do cabecalho -->
        <?php
            include('./html/cabecalho.html');
            include('./html/menu.html')
        ?>
        <!-- /Fim do cabecalho -->
        <div class="container">
            <h2 class="border-bottom py-4">Nossas Lojas</h2>

            <div class="card-deck text-dark">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1483729558449-99ef09a8c325?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" class="card-img-top" alt="Rio de Janeiro">
                    <div class="card-body">
                        <h4 class="card-title">Rio de Janeiro</h4>
                        <div class="card-text">
                            <p>Avenida Presidente Vargas, 5000</p>
                            <p>10 &ordm; andar</p>
                            <p>Centro</p>
                        </div>
                        <p class="card-text"><small class="text-muted">(21) 3333-3333</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1592511067091-63ef796a2f87?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="São Paulo">
                    <div class="card-body">
                        <h4 class="card-title">São Paulo</h4>
                        <div class="card-text">
                            <p>Avenida Paulista, 985</p>
                            <p>3 &ordm; andar</p>
                            <p>Jardins</p>
                        </div>
                        <p class="card-text"><small class="text-muted">(11) 4444-4444</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1567718729902-c2dc5ca701c3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" class="card-img-top" alt="Santa Catarina">
                    <div class="card-body">
                        <h4 class="card-title">Santa Catarina</h4>
                        <div class="card-text">
                            <p>Rua Major &Aacute;vila, 370</p>
                            <p>Vila Mariana</p>
                        </div>
                        <p class="card-text"><small class="text-muted">(47) 5555-5555</small></p>
                    </div>
                </div>
            </div>
        </div>
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