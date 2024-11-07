<?php

if (!empty($_POST['btnregistrar'])) {
    if (!empty($_POST['ubicacion']) and !empty($_POST['descripcion']) and !empty($_POST['objeto_a_reparar']) and !empty($_POST['id_tipo_servicio']) and !empty($_POST['tipo_servicio'])) {

        $ubicacion = $_POST['ubicacion'];
        $descripcion = $_POST['descripcion'];
        $objeto_a_reparar = $_POST['objeto_a_reparar'];
        $id_tipo_servicio = $_POST['id_tipo_servicio'];
        $tipo_servicio = $_POST['tipo_servicio'];

        $sql = $conectar->query("INSERT INTO servicio (ubicacion, descripcion, objeto_a_reparar, id_tipo_servicio, tipo_servicio) VALUES ('$ubicacion', '$descripcion', '$objeto_a_reparar', $id_tipo_servicio, '$tipo_servicio')");

        if ($sql) {
            echo '<div class="alert alert-success">Servicio registrado exitosamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar servicio:</div>';
        }
    }else {
        echo '<div class="alert alert-warning">Por favor, complete todos los campos.</div>';
    }
}
