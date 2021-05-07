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


        <div class="container" id="container-conteudo">
            <div class="row" id="row-custom1">
                <div class="col-4" class="coluna-conteudo-1">
                    <img src="../assets/img/catalogo1.png" alt="" class="displayed img-fluid">
                    <h6>San Andrés - Colombia</h6>
                </div>
                <div class="col-4" class="coluna-conteudo-2">
                    <img src="../assets/img/catalogo2.png" alt="" class="displayed img-fluid">
                    <h6>Toronto - Canadá</h6>
                </div>
                <div class="col-4" class="coluna-conteudo-1">
                    <img src="../assets/img/catalogo3.png " alt="" class="displayed img-fluid">
                    <h6>Tóquio - Japão</h6>
                </div>
            </div>
            <div class="row" id="row-custom1">
                <div class="col-4" class="coluna-conteudo-2">
                    <img src="../assets/img/catalogo4.png" alt="" class="displayed img-fluid">
                    <h6>Campo Grande - MS</h6>
                </div>
                <div class="col-4" class="coluna-conteudo-1">
                    <img src="../assets/img/catalogo5.png" alt="" class="displayed img-fluid">
                    <h6>Feira de Santana - BH</h6>
                </div>
                <div class="col-4" class="coluna-conteudo-2">
                    <img src="../assets/img/catalogo6.png" alt="" class="displayed img-fluid">
                    <h6>Petesburgo - Rússia</h6>
                </div>
            </div>
        </div>

        <!--Footer-->
        <?php
        include_once "../assets/components/footer.php";
        ?>
        <!-- Fim Footer -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
        </script>
</body>

</html>