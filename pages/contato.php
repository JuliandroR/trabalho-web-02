<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>

    <div class="container" id="merda">
        <!-- Nav pills -->
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="../index.html">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="./catalogo.html">Catálogo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="./cadastro.html">Cadastro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="./reserva.html">Reserva</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="./sobrenos.html">Sobre Nós</a>
            </li>
        </ul>
        <!--CONTEUDO-->
        <div class="container" id="container-conteudo">
            <div class="row " id="row-custom1">
                <form>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Digite seu nome</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Ex.: João da Silva">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Digite seu e-mail</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Ex.: mail@mail.com">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">Digite seu telefone</label>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Ex.: (67) 9 9999-9999">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message">Digite sua mensagem</label>
                                <textarea class="form-control" id="message" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar contato</button>
                </form>

            </div>

        </div>

        <!--FOOTER-->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>