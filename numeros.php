<?php
$numeros = array();
for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(1, 100);
}

$numeroMayor = max($numeros);
$numeroMenor = min($numeros);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatorios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Números Aleatorios</h1>
    <p>Números generados: <?php echo implode(", ", $numeros); ?></p>
    <p>Número mayor: <?php echo $numeroMayor; ?></p>
    <p>Número menor: <?php echo $numeroMenor; ?></p>
    <a href="index.html">Regresar al Menú Principal</a>
</body>
</html>
