<?php
session_start(); // Inicia la sesión

// Guarda los valores en variables de sesión
$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['apellido'] = $_POST['apellido'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos</title>
    <link rel="stylesheet" href="CSS/style2.css">
    </head>
</head>
<body>
<div class="contenedor-datos">
        <h2>Datos recibidos</h2>
        <p><strong>Nombre:</strong> <?php echo $_SESSION['nombre']; ?></p>
        <p><strong>Apellido:</strong> <?php echo $_SESSION['apellido']; ?></p>
    </div>
</body>
</html>