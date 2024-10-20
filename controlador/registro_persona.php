<?php

include_once("modelo/conectar.php");

if (isset($_POST['btnregistrar'])) {
    $ubicacion = $_POST['ubicacion'];
    $descripcion = $_POST['descripcion'];
    $objeto_a_reparar = $_POST['objeto_a_reparar'];
    $id_tipo_servicio = $_POST['id_tipo_servicio'];

    $sql = $conectar->query("INSERT INTO servicio (ubicacion, descripcion, objeto_a_reparar, id_tipo_servicio) VALUES ('$ubicacion', '$descripcion', '$objeto_a_reparar', '$id_tipo_servicio')");

    if ($sql == 1) {
        echo '<div class="alert alert-success">Persona registrada exitosamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al registrar persona</div>';
    }
}
