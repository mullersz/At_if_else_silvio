<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado Temperatura</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php
$temp = $_GET['temp'];

echo "<h1>Temperatura: {$temp}°C</h1>";

if ($temp < 15) {
    echo "<p>Está frio!</p>";
} elseif ($temp <= 25) {
    echo "<p>Temperatura agradável.</p>";
} else {
    echo "<p>Está quente!</p>";
}
?>
</body>
</html>
