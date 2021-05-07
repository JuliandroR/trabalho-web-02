<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
</head>

<body>
    <div class="container" id="merda">
        <!-- Nav pills -->
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="./pages/index.php">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="./pages/catalogo.php">Catálogo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="./pages/cadastro.php">Cadastro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="./pages/reserva.php">Reserva</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="./pages/sobrenos.php">Sobre Nós</a>
            </li>
        </ul>

        <!-- CARROUSEL -->
        <div>
            <div class="row">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./assets/img/imagem2.jpg" alt="Los Angeles" class="img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/imagem3.jpg" alt="Chicago" class="img-fluid">
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
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

        <footer>
            <div class="row text-center">
                <div class="cow-md">
                    <a href="#" class="fa fa-youtube"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-pinterest"></a>
                    <a href="#" class="fa fa-google"></a>
                </div>
            </div>
        </footer>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>