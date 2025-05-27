<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado IMC</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = $peso / ($altura * $altura);

echo "<h1>IMC: " . number_format($imc, 2) . "</h1>";

if ($imc < 18.5) {
    echo "<p>Abaixo do peso</p>";
} elseif ($imc < 25) {
    echo "<p>Peso normal</p>";
} elseif ($imc < 30) {
    echo "<p>Sobrepeso</p>";
} else {
    echo "<p>Obesidade</p>";
}
?>
</body>
</html>

