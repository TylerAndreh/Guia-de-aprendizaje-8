<?php
function convertir($cantidad, $from_unit, $to_unit) {
    $conversiones = [
        'km' => 1000000,
        'm' => 1000,
        'cm' => 10,
        'mm' => 1
    ];

    if (!isset($conversiones[$from_unit]) || !isset($conversiones[$to_unit])) {
        throw new Exception("Unidades inválidas.");
    }

    // Convertimos a milímetros primero
    $cantidadEnMm = $cantidad * $conversiones[$from_unit];
    // Convertimos de milímetros a la unidad seleccionada
    $resultado = $cantidadEnMm / $conversiones[$to_unit];

    return $resultado;
}

try {
    if (!isset($_POST['cantidad']) || !is_numeric($_POST['cantidad'])) {
        throw new Exception("Por favor ingrese una cantidad válida.");
    }

    $cantidad = $_POST['cantidad'];
    $from_unit = $_POST['from_unit'];
    $to_unit = $_POST['to_unit'];

    $resultado = convertir($cantidad, $from_unit, $to_unit);
    
    echo "<h1>Resultado de la conversión</h1>";
    echo "<p>{$cantidad} {$from_unit} son {$resultado} {$to_unit}</p>";
    echo "<a href='home.html'>Regresar al inicio</a>";
} catch (Exception $e) {
    echo "<h1>Error en la conversión</h1>";
    echo "<p>{$e->getMessage()}</p>";
    echo "<a href='home.html'>Regresar al inicio</a>";
}
?>
