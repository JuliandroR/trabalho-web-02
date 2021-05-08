<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <div class="container" id="global">
        <!-- Header -->
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Início</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="pages/sobrenos.php">Sobre Nós</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./pages/catalogo.php">Catálogo</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./pages/contato.php">Contato</a>
            </li>

            <li class="nav-item">
                <a class="btn btn-primary" href="./pages/reserva.php" role="button">Faça sua Reserva</a>
            </li>

        </ul>
        <!-- Fim Header -->

        <!-- CARROUSEL -->
        <div>
            <div class="row">
                <div id="bannerPresentation" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./assets/img/imagem2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./assets/img/imagem3.jpg" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#bannerPresentation" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#bannerPresentation" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="container" id="container-conteudo">
            <div class="row" id="row-custom1">
                <div class="col-4" id="coluna-conteudo-1">
                    <img src="./assets/img/conteudo.png" alt="" class="displayed img-fluid">

                </div>
                <div class="col-8" id="coluna-conteudo-2">

                    <blockquote class="blockquote text-center">
                        <p class="mb-4"><br><br><br>Verdadeira viagem de descobrimento<br>
                            Não consiste em procurar novas paisagens<br>
                            E sim em ter novos olhos.</p>
                        <footer class="blockquote-footer">Marcel Proust <cite title="Título da fonte">Pensador.com</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <!--CONTEUDO-->
        <div class="container" id="container-conteudo">
            <div class="row" id="row-custom1">
                <div class="col-8" id="coluna-conteudo-1">

                    <blockquote class="blockquote text-center">
                        <p class="mb-4"><br><br><br>Uma longa viagem, começa com um único passo.</p>
                        <footer class="blockquote-footer">Lao-Tsé <cite title="Título da fonte">Pensador.com</cite></footer>
                    </blockquote>

                </div>
                <div class="col-4" id="coluna-conteudo-2">
                    <img src="./assets/img/conteudo1.svg" alt="" class="displayed img-fluid">
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php
        include_once "./assets/components/footer.php";
        ?>
        <!-- Footer -->


    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>