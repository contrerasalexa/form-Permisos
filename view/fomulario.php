<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../src/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="fondo">
        <h2>Tramite de Permisos</h2>
        <form>
            <div class="row">
                <div>
                    <label for="nombre">Nombre(s):</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre">
                </div>
                <div>
                    <label for="apellido_paterno">Apellido Paterno:</label>
                    <input type="text" id="apellido_paterno" name="apellido_paterno" placeholder="Escribe tu apellido paterno">
                </div>
            </div>
            <div class="row">
                <div>
                    <label for="apellido_materno">Apellido Materno:</label>
                    <input type="text" id="apellido_materno" name="apellido_materno" placeholder="Escribe tu apellido materno">
                </div>
                <div>
                    <label for="apoderado_legal">Apoderado Legal:</label>
                    <select id="apoderado_legal" name="apoderado_legal">
                        <option value="">Seleccione una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
            </div>
            <label for="municipio">Municipio:</label>
            <select id="municipio" name="municipio">
                <option value="">Seleccione un municipio</option>
                <option value="municipio1">Municipio 1</option>
                <option value="municipio2">Municipio 2</option>
            </select>

            <label for="permiso">Permiso:</label>
            <select id="permiso" name="permiso">
                <option value="degustaciones">Degustaciones</option>
                <option value="otros">Otros</option>
            </select>

            <label for="direccion_calle">Dirección Calle:</label>
            <input type="text" id="direccion_calle" name="direccion_calle" placeholder="Escribe la calle">

            <div class="row">
                <div>
                    <label for="direccion_numero">Dirección Número:</label>
                    <input type="text" id="direccion_numero" name="direccion_numero" placeholder="Número">
                </div>
                <div>
                    <label for="giro_actividad">Giro o Actividad:</label>
                    <input type="text" id="giro_actividad" name="giro_actividad" placeholder="Describe la actividad">
                </div>
            </div>

            <label for="entre_calles">Entre las calles de:</label>
            <input type="text" id="entre_calles" name="entre_calles" placeholder="Ej. Calle 1 y Calle 2">

            <label for="superficie">Superficie:</label>
            <div class="row">
                <div class="col-md-6">
                    <input type="number" id="superficie" name="superficie" class="form-control" placeholder="Escribe la superficie">
                </div>
                <div class="col-md-6">
                    <select id="unidad" name="unidad" class="form-select">
                        <option value="">Seleccione una unidad</option>
                    </select>
                </div>
            </div>

            <label for="horario">Horario:</label>
            <input type="text" id="horario" name="horario" placeholder="Ej. 9:00 AM - 6:00 PM">

            <div class="row">
                <div>
                    <label for="periodo_a">Periodo A:</label>
                    <input type="date" id="periodo_a" name="periodo_a">
                </div>
                <div>
                    <label for="periodo_b">Periodo B:</label>
                    <input type="date" id="periodo_b" name="periodo_b">
                </div>
            </div>

            <label for="tipo_permiso">Tipo de Permiso:</label>
            <select id="tipo_permiso" name="tipo_permiso">
                <option value="">Seleccione el tipo de permiso</option>
                <option value="temporal">Temporal</option>
                <option value="permanente">Permanente</option>
            </select>

            <label for="observaciones">Observaciones:</label>
            <textarea id="observaciones" name="observaciones" maxlength="400" rows="4" placeholder="Escribe observaciones (máximo 400 caracteres)"></textarea>

            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-outline-primary">Guardar</button>
            </div>
        </form>
    </div>

</body>

</html>