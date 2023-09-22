<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    
    <?php
    // Função para calcular o IMC
    function calcularIMC($peso, $altura) {
        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            return $imc;
        } else {
            return 0;
        }
    }

    // Verifica se o formulário foi enviado
    if (isset($_POST['calcular'])) {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $imc = calcularIMC($peso, $altura);

        echo "<h2>Resultado:</h2>";
        echo "Peso: $peso kg<br>";
        echo "Altura: $altura m<br>";
        echo "IMC: " . number_format($imc, 2) . "<br>";

        // Interpretar o IMC
        if ($imc < 18.5) {
            echo "Você está abaixo do peso.";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            echo "Seu peso está normal.";
        } elseif ($imc >= 25 && $imc < 29.9) {
            echo "Você está com sobrepeso.";
        } else {
            echo "Você está com obesidade.";
        }
    }
    ?>

    <h2>Calcule o seu IMC</h2>
    <form method="post" action="">
        Peso (em kg): <input type="text" name="peso"><br>
        Altura (em metros): <input type="text" name="altura"><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>
</body>
</html>