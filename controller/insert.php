<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body></body>
</html>

<?php
require_once('../model/conexion.php');
require_once('../model/ORM.php'); // Asegúrate de tener esta clase base para la inserción.

$db = new Database();
$cnn = $db->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Paso 1: Recopilar datos del formulario
    $usuario_data = [
        'nombre' => $_POST['nombre'],
        'ap_paterno' => $_POST['apellido_paterno'],
        'ap_materno' => $_POST['apellido_materno'],
        'id_apod_leg_fk' => $_POST['apoderado_legal'] === 'si' ? 1 : 0, // Ejemplo de cómo manejar relaciones.
    ];

    $permiso_data = [
        'id_municipio_fk' => $_POST['municipio'],
        'id_permiso_fk' => $_POST['permiso'],
        'dir_calle' => $_POST['direccion_calle'],
        'dir_numero' => $_POST['direccion_numero'],
        'giro_actividad' => $_POST['giro_actividad'],
        'superficie' => $_POST['superficie'],
        'id_unidades_fk' => $_POST['unidad'],
        'periodo_a' => $_POST['periodo_a'],
        'periodo_b' => $_POST['periodo_b'],
        'id_tipo_permiso_fk' => $_POST['tipo_permiso'],
        'horario' => $_POST['horario'],
        'observaciones' => $_POST['observaciones'],
    ];

    // Paso 2: Insertar datos en la tabla de usuarios
    $usuario_model = new ORM($cnn, 'usuarios', [
        'nombre', 'ap_paterno', 'ap_materno', 'id_apod_leg_fk'
    ]);

    if ($usuario_model->insert($usuario_data)) {
        // Obtener el ID del usuario recién insertado
        $id_usuario = $cnn->lastInsertId();

        // Paso 3: Insertar datos en la tabla de permisos
        $permiso_data['id_usuarios_fk'] = $id_usuario; // Relacionar permiso con el usuario.
        $permiso_model = new ORM($cnn, 'tramitados', array_keys($permiso_data));

        if ($permiso_model->insert($permiso_data)) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Registro completado',
                    text: 'El permiso ha sido registrado exitosamente.',
                    confirmButtonText: 'Aceptar'
                }).then(() => {
                    window.location.href = '../view/formulario.php';
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error al registrar permiso',
                    text: 'Hubo un problema al registrar el permiso.',
                    confirmButtonText: 'Intentar de nuevo'
                });
            </script>";
        }
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error al registrar usuario',
                text: 'Hubo un problema al registrar el usuario.',
                confirmButtonText: 'Intentar de nuevo'
            });
        </script>";
    }
}
?>
