<?php
require_once __DIR__ . '/../../includes/session.php';
require_once __DIR__ . '/../../controllers/ServicioController.php';

checkSessionAndRole('empleado');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_servicio = $_POST['id_servicio'];
    $observaciones = $_POST['observaciones'];

    $controller = new ServicioController();
    $resultado = $controller->generarReporte($id_servicio, $observaciones);

    if ($resultado) {
        echo 'success';
    } else {
        echo 'error';
    }
}
?>
