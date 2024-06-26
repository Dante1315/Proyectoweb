<?php
require_once __DIR__ . '/../../includes/session.php';
checkSessionAndRole('cliente');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cuenta</title>
    <link rel="stylesheet" href="../css/inicioAdmin.css">
</head>
<body>
<?php include '../templates/headerClient.php'; ?>


    <h1 class="title">Mi Cuenta</h1>

    <div class="container">
        <a href="historial.php" class="box">
            <h2>Historial de compras</h2>
        </a>
        <a href="configuracion.php" class="box">
            <h2>Configuración de la cuenta</h2>
        </a>
        <a href="solicitud.php" class="box">
            <h2>Solicitar servicio</h2>
        </a>
        <a href="factura.php" class="box">
            <h2>Mis facturas</h2>
        </a>
    </div>

    <?php include '../templates/footer.php'; ?>

</body>
</html>
