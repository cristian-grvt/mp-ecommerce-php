<?php
error_log("Registro Notificaciones");
$data = json_decode(file_get_contents('php://input'), true);
error_log(json_encode($data));
?>