<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
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
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Seu email">
                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com
                            ninguém.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Exemplo de input de arquivo</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </form>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="opcao1">
                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="opcao2">
                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="opcao3" disabled>
                    <label class="form-check-label" for="inlineCheckbox3">3 (desativado)</label>
                </div>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Seu email">
                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com
                            ninguém.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>