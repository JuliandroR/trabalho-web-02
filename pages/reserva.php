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
                <h1 class="display-4">Faça sua reserva hoje mesmo</h1>
                <form action="">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="name">Digite seu nome</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Ex.: João da Silva">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="cpf">Digite seu CPF</label>
                                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Ex.: 123.321.132-22">
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
                            <label for="destiny">Escolha seu destino</label>
                            <select class="form-control" name="destiny" id="destiny">
                                <option value=null>Escolha seu destino</option>
                                <option value="CampoGrande"> Campo Grande - MS </option>
                                <option value="FeiradeSantana"> Feira de Santana - BA </option>
                                <option value="SanAndres"> San Andres - Colômbia </option>
                                <option value="SãoPetersburgo"> São Petersburgo - Rússia </option>
                                <option value="Toronto"> Toronto - Canadá </option>
                                <option value="Tokio"> Tókio - Japão </option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3">
                            <label for="quantDays">Quantidade de dias</label>
                            <input type="tel" name="quantDays" id="quantDays" class="form-control">
                        </div>
                        <div class="col-sm-3">
                            <label for="quantPersons">Quantidade de pessoas</label>
                            <input type="tel" name="quantPersons" id="quantPersons" class="form-control">
                        </div>
                        <div class="col-sm-3">
                            <label for="dateGo">Data de ida</label>
                            <input type="date" name="dateGo" id="dateGo" class="form-control">
                        </div>
                        <div class="col-sm-3">
                            <label for="dateBack">Data de volta</label>
                            <input type="date" name="dateBack" id="dateBack" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <label for="securityBagage">Opta por bagagem segura?</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="securityBagage" id="sim" value="yes">
                                <label class="form-check-label" for="sim">Sim</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="securityBagage" id="não" value="no">
                                <label class="form-check-label" for="não">Não</label>
                            </div>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Fazer reserva</button>
                </form>
            </div>

        </div>

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