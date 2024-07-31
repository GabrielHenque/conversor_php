<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/geral.css">


    <title>Calculadora de Rendimento</title>
</head>
<body>
    
    <h1>Calculadora de Rendimento</h1>

    <form method="post" action="">
        <label for="valorDeposito">Digite o valor depositado:</label>
        <input type="number" id="valorDeposito" name="valorDeposito" step="0.01" required><br><br>

        <input type="submit" value="Calcular Rendimento">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Receba o valor do formulário e coloque em uma variável
        $valorDeposito = $_POST['valorDeposito'];

        // Calcule o valor com rendimento
        $valorComRendimento = $valorDeposito + ($valorDeposito * 0.007);

        // Exiba o valor com rendimento
        echo "<h2>Resultado:</h2>";
        echo "<p><strong>O valor com rendimento após um mês é: </strong>" . number_format($valorComRendimento, 2, ',', '.') . "</p>";
    }
    ?>

</body>
</html>
