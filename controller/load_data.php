<?php
require_once('../model/conexion.php'); // Conexión a la base de datos

$db = new Database();
$cnn = $db->getConnection();

// Consultar municipios
$query_municipios = "SELECT id_municipio_pk, nombre FROM municipio WHERE estatus = 'activo'";
$stmt_municipios = $cnn->prepare($query_municipios);
$stmt_municipios->execute();
$municipios = $stmt_municipios->fetchAll(PDO::FETCH_ASSOC);

// Consultar permisos
$query_permisos = "SELECT id_permiso_pk, nombre FROM permisos WHERE estatus = 'activo'";
$stmt_permisos = $cnn->prepare($query_permisos);
$stmt_permisos->execute();
$permisos = $stmt_permisos->fetchAll(PDO::FETCH_ASSOC);

// Consultar unidades
$query_unidades = "SELECT id_unidades_pk, nombre FROM unidades WHERE estatus = 'activo'";
$stmt_unidades = $cnn->prepare($query_unidades);
$stmt_unidades->execute();
$unidades = $stmt_unidades->fetchAll(PDO::FETCH_ASSOC);
?>
