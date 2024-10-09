<?php
$alumnos = array(
    'Básico' => array(1, 14, 8, 3), // Inglés, Francés, Alemán, Portugués
    'Medio' => array(6, 19, 7, 2),
    'Perfeccionamiento' => array(3, 13, 4, 1)
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos por Nivel e Idioma</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Número de Alumnos por Nivel e Idioma</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nivel</th>
                <th>Inglés</th>
                <th>Francés</th>
                <th>Alemán</th>
                <th>Portugués</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnos as $nivel => $idiomas): ?>
                <tr>
                    <td><?php echo $nivel; ?></td>
                    <?php foreach ($idiomas as $cantidad): ?>
                        <td><?php echo $cantidad; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.html">Regresar al Menú Principal</a>
</body>
</html>
