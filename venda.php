<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/geral.css">


    <title>Calculadora de Preço de Venda</title>
</head>
<body>
    
    <h1>Calculadora de Preço de Venda</h1>

    <form method="post" action="">
        <label for="precoCusto">Digite o preço de custo do produto:</label>
        <input type="number" id="precoCusto" name="precoCusto" step="0.01" required><br><br>

        <label for="percentualAcrescimo">Digite o percentual de acréscimo:</label>
        <input type="number" id="percentualAcrescimo" name="percentualAcrescimo" step="0.01" required><br><br>

        <input type="submit" value="Calcular Preço de Venda">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Receba os valores do formulário e coloque em variáveis
        $precoCusto = $_POST['precoCusto'];
        $percentualAcrescimo = $_POST['percentualAcrescimo'];

        // Calcule o preço de venda
        $precoVenda = $precoCusto + ($precoCusto * ($percentualAcrescimo / 100));

        // Exiba o preço de venda
        echo "<h2>Resultado:</h2>";
        echo "<p><strong>O preço de venda do produto é: </strong>" . number_format($precoVenda, 2, ',', '.') . "</p>";
    }
    ?>

</body>
</html>
