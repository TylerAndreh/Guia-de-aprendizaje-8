<?php
$edades = array(
    'Macarena' => 25,
    'Juan' => 30,
    'Alberto' => 14,
    'Santiago' => 21,
    'Eva' => 17,
    'Rocío' => 18,
    'Rodrigo' => 15,
    'Mateo' => 8
);

$edadMayor = max($edades);
$nombreMayor = array_search($edadMayor, $edades);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona de Mayor Edad</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Persona de Mayor Edad</h1>
    <p>La persona con mayor edad es <?php echo $nombreMayor; ?>, con <?php echo $edadMayor; ?> años.</p>
    <a href="index.html">Regresar al Menú Principal</a>
</body>
</html>
