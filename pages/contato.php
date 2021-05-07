<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>

    <div class="container" id="global">
        <!-- Header -->
        <?php
        include_once "../assets/components/header.php";
        ?>
        <!-- Fim Header -->

        <!--CONTEUDO-->
        <div class="container" id="container-conteudo">
            <div class="row " id="row-custom1">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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
                                <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar contato</button>
                </form>

            </div>

        </div>

        <!-- Processamento dos dados -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $phone = htmlspecialchars($_POST["phone"]);
            $message = htmlspecialchars($_POST["message"]);
            $cont = 0;

            if (preg_match('/^([a-z]){1,}([a-z0-9._-]){1,}([@]){1}([a-z]){2,}([.]){1}([a-z]){2,}([.]?){1}([a-z]?){2,}$/i', $email)) {
                $cont += 1;
            } else {
                echo "<div class='alert alert-danger' role='alert'> O e-mail $email está incorreto </div>";
            }

            if (preg_match('^\(+[0-9]{2,3}\) [9]{1,1}[0-9]{4}-[0-9]{4}$^', $phone)) {
                $cont += 1;
            } else {
                echo "<div class='alert alert-danger' role='alert'> O telefone $phone está incorreto </div>";
            }
        }
        ?>
        <!-- Fim processamento dos dados -->

        <!--Footer-->
        <?php
        include_once "../assets/components/footer.php";
        ?>
        <!-- Fim Footer -->

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>