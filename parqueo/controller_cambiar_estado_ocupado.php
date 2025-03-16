<?php
include('../app/config.php');

if (!isset($_GET['cuviculo']) || empty($_GET['cuviculo'])) {
    echo json_encode(["status" => "error", "message" => "No se recibió el ID del parqueo."]);
    exit();
}

$cuviculo = $_GET['cuviculo'];
$estado_espacio = "OCUPADO"; 

date_default_timezone_set("America/Caracas");
$fechaHora = date("Y-m-d H:i:s");

// Verificar conexión a la base de datos
if (!$pdo) {
    echo json_encode(["status" => "error", "message" => "No se pudo conectar a la base de datos."]);
    exit();
}

// Preparar consulta
$sentencia = $pdo->prepare("UPDATE tb_mapeos SET 
estado_espacio = :estado_espacio,
fyh_actualizacion = :fyh_actualizacion 
WHERE id_map = :id_map");

$sentencia->bindParam(':estado_espacio', $estado_espacio);
$sentencia->bindParam(':fyh_actualizacion', $fechaHora);
$sentencia->bindParam(':id_map', $cuviculo, PDO::PARAM_INT);

if ($sentencia->execute()) {
    echo json_encode(["status" => "success", "message" => "Estado actualizado correctamente."]);
} else {
    $errorInfo = $sentencia->errorInfo();
    echo json_encode(["status" => "error", "message" => "Error al actualizar: " . $errorInfo[2]]);
}
?>
