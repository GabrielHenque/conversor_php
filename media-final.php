<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/geral.css">


    <title>Calculadora de Média</title>
</head>
<body>
    
    <h1>Calculador de Média Final</h1>

    <form method="post" action="">
        
    <label for="nome">Nome do Aluno:</label>
    <input type="text" id="name" name="nome" required><br><br>


    <label for="bimestre1">Nota do primeiro bimestre:</label>
    <input type="number" id="bimestre1" name="bimestre1" step="0.01" required><br><br>

    <label for="bimestre2">Nota do segundo bimestre:</label>
    <input type="number" id="bimestre2" name="bimestre2" step="0.01" required><br><br>

    <label for="bimestre3">Nota do primeiro bimestre:</label>
    <input type="number" id="bimestre3" name="bimestre3" step="0.01" required><br><br>

    <label for="bimestre4">Nota do segundo bimestre:</label>
    <input type="number" id="bimestre4" name="bimestre4" step="0.01" required><br><br>

    <input type="submit" value="Calculadar Média">


    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // Receba os valores do formulario e coloca em variaveis
        $nome = $_POST['nome'];
        $bimestre1 = $_POST['bimestre1'];
        $bimestre2 = $_POST['bimestre2'];
        $bimestre3 = $_POST['bimestre3'];
        $bimestre4 = $_POST['bimestre4'];

        // Calcula média
        $media = ($bimestre1 + $bimestre2 + $bimestre3 + $bimestre4)/4;

        // Exibe o nome e média
        echo "<h2>Resultado:</h2>";
        echo "<p><strong>Nome do Aluno:</strong>" . htmlspecialchars($nome). "</p>";
        echo "<p><strong>Media Final: </strong>" . number_format($media, 2, ',' , ',') . "</p>";

    }


    ?>

</body>
</html>