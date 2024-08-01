<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/geral.css">
    <title>Calculadora Simples</title>
</head>
<body>
    <h1>Calculadora Simples</h1>
    <form method="post" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" required><br><br>

        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" step="0.01" required><br><br>

        <div id="somas" >
            <label for="adicao">Adição (+)</label>
            <input type="radio" id="adicao" name="operador" value="+" required>
            
            <label for="subtracao">Subtração (-)</label>
            <input type="radio" id="subtracao" name="operador" value="-" required>
            
            <label for="multiplicacao">Multiplicação (*)</label>
            <input type="radio" id="multiplicacao" name="operador" value="*" required>
            
            <label for="divisao">Divisão (/)</label>
            <input type="radio" id="divisao" name="operador" value="/" required><br><br>
        </div>

        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        // Receber os valores do formulário e armazenar em variáveis
        $operador = $_POST['operador'];
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        // Calcular
        if ($operador == "+") {
            $resultado = $numero1 + $numero2; // Adição
        } elseif ($operador == "-") {
            $resultado = $numero1 - $numero2; // Subtração
        } elseif ($operador == "*") {
            $resultado = $numero1 * $numero2; // Multiplicação
        } elseif ($operador == "/") {
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2; // Divisão
            } else {
                $resultado = "Erro: Divisão por zero não é permitida.";
            }
        }

        // Exibir o resultado
        echo "<h2><strong>Resultado: </strong>" . $resultado . "</h2>";
    }
    ?>
</body>
</html>
