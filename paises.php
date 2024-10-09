<?php
$paisesCapitales = array(
    'España' => 'Madrid',
    'Francia' => 'París',
    'Alemania' => 'Berlín',
    'Portugal' => 'Lisboa',
    'Italia' => 'Roma'
);

$error = '';
$capital = '';

if (isset($_POST['pais'])) {
    $pais = ucfirst(strtolower(trim($_POST['pais'])));
    if (array_key_exists($pais, $paisesCapitales)) {
        $capital = $paisesCapitales[$pais];
    } else {
        $error = "El país '$pais' no se encuentra en nuestra lista.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitales de Países</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Buscar Capital del País</h1>
    <form method="POST">
        <input type="text" name="pais" placeholder="Introduce un país" required>
        <button type="submit">Buscar Capital</button>
        <button type="reset">Limpiar</button>
    </form>

    <?php if ($capital): ?>
        <p>La capital de <?php echo $pais; ?> es <?php echo $capital; ?>.</p>
    <?php elseif ($error): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>

    <a href="index.html">Regresar al Menú Principal</a>
</body>
</html>
