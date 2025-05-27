<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado Média</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "<h1>Média: " . number_format($media, 2) . "</h1>";

if ($media >= 7) {
    echo "<p>APROVADO</p>";
} else {
    echo "<p>REPROVADO</p>";
}
?>
</body>
</html>
