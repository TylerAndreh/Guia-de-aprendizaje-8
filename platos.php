<?php
// Arreglo de platos - comida
$platosCarta = array(
    'Lomo Saltado' => 'Carne, papa frita y arroz',
    'Pollo Saltado' => 'Pollo saltado, papa frita, arroz y ensalada',
    'Pescado Frito' => 'Pescado frito, frijoles y ensalada'
);

$descripcion = ''; // Variable para guardar la descripción

// Si se ha enviado el formulario
if (isset($_POST['plato'])) {
    // Captura del plato para mostrar su descripción :D
    $platoSeleccionado = $_POST['plato'];
    if (array_key_exists($platoSeleccionado, $platosCarta)) {
        $descripcion = $platosCarta[$platoSeleccionado];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Platos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Platos a la Carta</h1>
    <form method="POST">
        <label for="plato">Selecciona un plato:</label>
        <select name="plato" id="plato">
            <?php
            // Iterar sobre el array de platos para mostrar las opciones
            foreach ($platosCarta as $plato => $desc) {
                echo "<option value=\"$plato\">$plato</option>";
            }
            ?>
        </select>
        <button type="submit">Mostrar Descripción</button>
        <button type="reset">Limpiar</button>
    </form>

    <?php if ($descripcion): ?>
        <p><strong>Descripción del plato seleccionado:</strong> <?php echo $descripcion; ?></p>
    <?php endif; ?>

    <a href="index.html">Regresar al Menú Principal</a>
</body>
</html>
