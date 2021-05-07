<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Parabéns</title>
</head>

<body>
    <div class="container" id="global">
        <!-- Header -->
        <?php
        include_once "../assets/components/header.php";
        ?>
        <!-- Fim Header -->

        <!-- Conteúdo -->
        <div class="row">
            <div class="col-sm-12">
                <center>
                    <h1 class="display-3"><b>Parabéns!</b></h1>
                </center>
                <p class="h5">
                    Em breve algum de nossos consultores entrará em contato com você para que você possa
                    finalizar a aquisição do seu pacote de viagem
                </p>
                <p class="h6">
                    Por agora confirme se os dados informados estão corretos, pois é através deles
                    que entraremos em contato com vocễ e agilizaremos todo o processo de reserva de sua viagem =)
                </p>
            </div>
        </div>

        <div class="row">
            <center>
            </center>
        </div>
        <div style="margin-top: 50px;" class="row text-center">
            <h1 class="display-6">Dados pessoais</h1>
            <table class="table">
                <tbody>
                    <tr>
                        <td class="text-center" colspan="4"><b>Mark Silva</b></td>
                    </tr>

                    <tr>
                        <th class="text-center" scope="row">CPF</th>
                        <td>123-321-312-13</td>

                        <th class="text-center" scope="row">Telefone</th>
                        <td>(67) 9 9999-9999)</td>
                    </tr>

                    <tr>
                        <th class="text-center" scope="row">E-mail</th>
                        <td colspan="3">mail@mail.com</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="margin-top: 50px;" class="row text-center">
            <h1 class="display-6">Dados de interesse</h1>
            <table class="table">
                <tbody>
                    <tr>
                        <th class="text-center">Destino</th>
                        <td class="text-center" colspan="3">Salvador Bahia</td>
                    </tr>

                    <tr>
                        <th class="text-center" scope="row">Quantidade de pessoas</th>
                        <td>3</td>

                        <th class="text-center" scope="row">Quantidade de dias</th>
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="margin-top: 50px;" class="row text-center">
            <p class="h4">Está tudo certo? Se sim agora é só aguardar que um consultor entre em contato =)</p>
            <p class="h6">
                Caso algo esteja errado
                <a class="btn btn-link" href="./reserva.php">Clique aqui para corrigir</a>
            </p>
        </div>


        <!-- Fim conteúdo -->

        <!-- Footer -->
        <?php
        include_once "../assets/components/footer.php";
        ?>
        <!-- Footer -->
    </div>
</body>