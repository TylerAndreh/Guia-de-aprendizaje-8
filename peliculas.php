<?php
$peliculasMes = array(
    'Enero' => 9,
    'Febrero' => 12,
    'Marzo' => 0,
    'Abril' => 17
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas Vistas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Películas Vistas por Mes</h1>
    <ul>
        <?php foreach ($peliculasMes as $mes => $cantidad): ?>
            <?php if ($cantidad > 0): ?>
                <li><?php echo $mes . ": " . $cantidad . " películas"; ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
    <a href="index.html">Regresar al Menú Principal</a>
</body>
</html>
