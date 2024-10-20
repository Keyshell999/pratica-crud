<?php
include "../modelo/conectar.php";

// Recibir los datos del formulario
if (isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $ubicacion = $_POST['ubicacion'];
    $descripcion = $_POST['descripcion'];
    $objeto_a_reparar = $_POST['objeto_a_reparar'];
    $id_tipo_servicio = $_POST['id_tipo_servicio'];

    // Consulta para actualizar el servicio
    $sql = $conectar->query("UPDATE servicio SET ubicacion = '$ubicacion', descripcion = '$descripcion', objeto_a_reparar = '$objeto_a_reparar', id_tipo_servicio = '$id_tipo_servicio' WHERE id_servicio = '$id'");

    if ($sql) {
        echo '<div class="alert alert-success">Servicio actualizado correctamente.</div>';
    } else {
        echo '<div class="alert alert-danger">Error al actualizar el servicio:</div>' . $conectar->error;
    }

    // Redireccionar de vuelta a la lista
    header("Location: ../index.php");
}
?>