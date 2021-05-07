<!doctype html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Lista 5 - Web II - Exercício 1</title>
</head>
<style>
    .msg {
        margin-bottom: 0;
    }

    .cotacao {
        margin: 0;
    }
</style>

<body>
    <h1>Lista 5 - Web II</h1>

    <h2>Exercício 1</h2>
    <form action="#" method="post">
        <label for="valor">Valor em Real:</label>
        <input id="valor" type="number" name="valor"  step=".01"/>
        <button type="submit">Calcular</button>
    </form>

    <?php
        $moedas = array(
            "Pataca"  => 1.47,
            "Quiate"  => 286.30,
            "Taka bengali"  => 15.58,
        );

        if (isset($_POST['valor']) & !empty($_POST['valor'])) {
            $valor = $_POST['valor'];

            echo "<p class=\"msg\">R$ $valor convertidos: </p>";
            foreach ($moedas as $key => $cotacao)
                echo "<p class=\"cotacao\">$key: " . $cotacao / $valor . "</p>";

        } else if($_SERVER['REQUEST_METHOD'] == "POST"){
            echo "<p>Informe o valor em reais!!</p>";
        }
    ?>
</body>

</html>