<?php
require_once('../model/conexion.php'); // Conexión a la base de datos
require_once('../controller/load_data.php'); // Archivo con las consultas
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../src/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="fondo">
        <h2>Tramite de Permisos</h2>
        <form action="../controller/insert.php" method="POST">
            <label for="municipio">Municipio:</label>
            <select id="municipio" name="municipio">
                <option value="">Seleccione un municipio</option>
                <?php foreach ($municipios as $municipio): ?>
                    <option value="<?= $municipio['id_municipio_pk']; ?>"><?= $municipio['nombre']; ?></option>
                <?php endforeach; ?>
            </select>

            <label for="permiso">Permiso:</label>
            <select id="permiso" name="permiso">
                <option value="">Seleccione un permiso</option>
                <?php foreach ($permisos as $permiso): ?>
                    <option value="<?= $permiso['id_permiso_pk']; ?>"><?= $permiso['nombre']; ?></option>
                <?php endforeach; ?>
            </select>

            <label for="unidad">Unidad:</label>
            <select id="unidad" name="unidad">
                <option value="">Seleccione una unidad</option>
                <?php foreach ($unidades as $unidad): ?>
                    <option value="<?= $unidad['id_unidades_pk']; ?>"><?= $unidad['nombre']; ?></option>
                <?php endforeach; ?>
            </select>

            <!-- Otros campos del formulario -->
            <button type="submit" class="btn btn-outline-primary">Guardar</button>
        </form>
    </div>
</body>
</html>
